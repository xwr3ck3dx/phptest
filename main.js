var results = $('#results')[0];
var id = $('#id')[0];
var firstName = $('#firstName')[0];
var lastName = $('#lastName')[0];
var phone = $('#phone')[0];

var createStatement = "CREATE TABLE IF NOT EXISTS Contacts (id INTEGER PRIMARY KEY AUTOINCREMENT, firstName TEXT, lastName TEXT, phone TEXT)";
var selectAllStatement = "SELECT * FROM Contacts";
var insertStatement = "INSERT INTO Contacts (firstName, lastName, phone) VALUES (?, ?, ?)";
var updateStatement = "UPDATE Contacts SET firstName = ?, lastName = ?, phone = ? WHERE id = ?";
var deleteStatement = "DELETE FROM Contacts WHERE id=?";
var dropStatement = "DROP TABLE Contacts";

var db = openDatabase("AddressBook", "1.0", "Address Book", 200000);
var dataset;
createTable();

function onError(tx, error) {
    alert(error.message);
}

function showRecords() {
    results.innerHTML = '';
    db.transaction(function(tx) {
        tx.executeSql(selectAllStatement, [], function(tx, result) {
            dataset = result.rows;
            for (var i = 0, item = null; i < dataset.length; i++) {
                item = dataset.item(i);
                results.innerHTML += '<li>' + item['lastName'] + ' , ' + item['firstName'] + ' <a href="#" onclick="loadRecord(' + i + ')">edit</a>  ' + '<a href="#" onclick="deleteRecord(' + item['id'] + ')">delete</a></li>';
            }
        });
    });
}

function createTable() {
    db.transaction(function(tx) {
        tx.executeSql(createStatement, [], showRecords, onError);
    });
}

function insertRecord() {
    db.transaction(function(tx) {
        tx.executeSql(insertStatement, [firstName.value, lastName.value, phone.value], loadAndReset, onError);
    });
}

function loadRecord(i) {
    var item = dataset.item(i);
    firstName.value = item['firstName'];
    lastName.value = item['lastName'];
    phone.value = item['phone'];
    id.value = item['id'];
}

function updateRecord() {
    db.transaction(function(tx) {
        tx.executeSql(updateStatement, [firstName.value, lastName.value, phone.value, id.value], loadAndReset, onError);
    });
}

function deleteRecord(id) {
    db.transaction(function(tx) {
        tx.executeSql(deleteStatement, [id], showRecords, onError);
    });
    resetForm();
}

function dropTable() {
    db.transaction(function(tx) {
        tx.executeSql(dropStatement, [], showRecords, onError);
    });
    resetForm();
}

function loadAndReset() {
    resetForm();
    showRecords();
}

function resetForm() {
    firstName.value = '';
    lastName.value = '';
    phone.value = '';
    id.value = '';
}

$('.reset').on('click', resetForm);
$('.update').on('click', updateRecord);
$('.insert').on('click', insertRecord);
$('.drop').on('click', dropTable);