<html>
	<head>
		<title>Create User</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="password.css">	
	</head>
		<body>
			
      <h1 class="logo"> Krypto<span>Code</span></h1>

<h1 style="text-align: center;">Create User Record</h1>

<form class="ui form" style="max-width:250; margin: auto;" action='create_result.php' method='GET'>
  <div class="field">
    <label>first_name</label>
    <input <input type=text  name="first_name"> 

  </div>

  <div class="field">
    <label>last_name</label>
    <input <input type=text name="last_name"> 
  </div>
    
  <div class="field">
    <label>password</label>
    <div class="form-element">
    <input  type=text placeholder="password" id="password-field" name="password">
    <div class="password-policies">
      <div class="toggle-password">
        <i class="fa fa-eye"></i>
        <i class="fa fa-eye-slash"></i></div>
      <div class="policy-length">
        8 Characters
</div>
<div class="policy-number">
        Contains Number
</div>
<div class="policy-uppercase">
        Contains Uppercase
</div>
<div class="policy-special">
        Contains Special Characters
</div>
  </div>
   </div>
</div>
      <div class="field">
    <label>Email</label>
    <input type=text name="email">
   </div>

   <div class="field">
    <label>user_name</label>
    <input <input type=text name="username">
  </div>

  
  
  <button class="ui labled olive button" type="submit">Submit</button> <a href="create_result.php" class="ca">Have an account!? Log In</a>
</form>
<script>
function _id(name){
  return document.getElementById(name);
}
function _class(name){
  return document.getElementsByClassName(name);
}
_id("password-field").addEventListener("focus",function(){
  _class("password-policies")[0].classList.add("active");
});
_id("password-field").addEventListener("blur",function(){
  _class("password-policies")[0].classList.remove("active");
});
_id("password-field").addEventListener("keyup",function(){
  let password = _id("password-field").value;
  if(/[A-Z]/.test(password)){
    _class("policy-uppercase")[0].classList.add("active");
  }else{
    _class("policy-uppercase")[0].classList.remove("active");
  }
  if(/[0-9]/.test(password)){
    _class("policy-number")[0].classList.add("active");
  }else{
    _class("policy-number")[0].classList.remove("active");
  }
  if(/[A-Za-z0-9]/.test(password)){
    _class("policy-special")[0].classList.add("active");
  }else{
    _class("policy-special")[0].classList.remove("active");
  }
  if(password.length>7){
    _class("policy-length")[0].classList.add("active");
  }else{
    _class("policy-length")[0].classList.remove("active");
  }

});


  </script>

		</body>
</html>
