//Function to check the current page and change menu properties
let url = window.location.pathname;
let splited = url.split('/work').pop().replace('.php', '');

function setAttribute(id) {
  if (id == '') {
    id = id.replace('', 'home');
  } else if (id == 'index') {
    id = id.replace('index', 'home');
  }
  document.getElementById(id).setAttribute('class', 'active');
}

if (splited === 'db_review') {
  showTable();
  checkTable();
}

//Function to toggle table dept in db_review page
function showTable() {
  let table = document.getElementById('dept');
  if (table.style.display == 'none') {
    table.style.display = 'table';
  } else {
    table.style.display = 'none';
  }
}

//Function to display "Register not found" message
function checkTable() {
  var table, register;
  table = document.getElementById('employee-table');
  tbody = table.getElementsByTagName('tbody');
  register = document.getElementById('no-register');
  var arr = [].slice.call(tbody);
  if (arr[0].childElementCount === 0) {
    register.style.display = 'block';
  } else {
    register.style.display = 'none';
  }
}

//Function Call
setAttribute(splited);
