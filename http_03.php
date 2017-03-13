<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <p>
    <input type="text" name="name" placeholder="Your Name" />
  </p>
  <p>
    <input type="text" name="age" placeholder="Your Age" />
  </p>
  <p>
    <input type="email" name="email" placeholder="Your Email Address" />
  </p>
  <p>
    <input type="text" name="rating" placeholder="Rate out of 10" />
  </p>
  <p>
    What did you like about this Kata Series?
  </p>
  <p>
    <textarea name="compliments"></textarea>
  </p>
  <p>
    What could be improved about this Kata Series?
  </p>
  <p>
    <textarea name="criticism"></textarea>
  </p>
  <p>
    <input type="submit" />
  </p>
</form>
<?php
$_POST['name'] = "Jane Anderson";
$_POST['email'] = "ja1234@example.tld";
$_POST['message'] = "Hello World!";
function user_script() {
 if ($_SERVER["REQUEST_METHOD"] === "POST") { 
if((int)$_POST['rating']<1 || (int)$_POST['rating']>10){
  
echo "<span style=\"color: red\">Rating is invalid, please provide a number from 1 to 10</span>";
}
else {
 if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==false) {
  echo "<span style=\"color: red\">Email Address is Invalid</span>";
}
else {
  if(filter_var($_POST['age'], FILTER_VALIDATE_INT)==false) {
    echo "<span style=\"color: red\">Invalid Age provided</span>";
  
}
else {
  if(empty($_POST['name'])){
    echo "<span style=\"color: red\">Name field is required</span>";
  
}
else {
  $_GLOBALS['name']=$_POST['name'];
$_GLOBALS['name']=trim($_GLOBAL['name']);
$_GLOBALS['name']=stripslashes($_GLOBAL['name']);
$_GLOBALS['name']=htmlspecialchars($_GLOBAL['name']);
 $_GLOBALS['age']=$_POST['age'];
$_GLOBALS['age']=trim($_GLOBAL['age']);
$_GLOBALS['age']=stripslashes($_GLOBAL['age']);
$_GLOBALS['age']=htmlspecialchars($_GLOBAL['age']);
$_GLOBALS['email']=$_POST['email'];
$_GLOBALS['email']=trim($_GLOBAL['email']);
$_GLOBALS['email']=stripslashes($_GLOBAL['email']);
$_GLOBALS['email']=htmlspecialchars($_GLOBAL['email']);
 $_GLOBALS['rating']=$_POST['rating'];
$_GLOBALS['rating']=trim($_GLOBAL['rating']);
$_GLOBALS['rating']=stripslashes($_GLOBAL['rating']);
$_GLOBALS['rating']=htmlspecialchars($_GLOBAL['rating']);
$_GLOBALS['compliments'] = $_POST['compliments'];
$_GLOBALS['compliments']=trim($_GLOBAL['compliments']);
$_GLOBALS['compliments']=stripslashes($_GLOBAL['compliments']);
$_GLOBALS['compliments']=htmlspecialchars($_GLOBAL['compliments']);
$_GLOBALS['criticism'] = $_POST['criticism'];
$_GLOBALS['criticism']=trim($_GLOBAL['criticism']);
$_GLOBALS['criticism']=stripslashes($_GLOBAL['criticism']);
$_GLOBALS['criticism']=htmlspecialchars($_GLOBAL['criticism']);
var_dump($_GLOBAL);
}
}
}
}

}

}


user_script();