
function chk_form() {
if(document.getElementById("exampleInputEmail").value==''){
	alert("성명을 입력해주십시오.");
	return false;
}
if(document.getElementById("exampleInputPassword").value==''){
	alert("비밀번호를 입력해주십시오.");
	return false;
}
document.getElementById('frm').submit();
}