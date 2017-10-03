// Validating Empty Field
function check_empty() {
if (document.getElementById('id').value == "" || document.getElementById('notes').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}

/************Delete User Confirmation***************/
$( document ).ready(function() {

$(".delete_link").click(function(){

return confirm("Are you sure you want to delete this user?");

});
});