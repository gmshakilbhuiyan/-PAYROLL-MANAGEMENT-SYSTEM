<html >
  <head>
    <title>Employee information</title>
  </head>
  <body align="center">
    <form name="form" onsubmit="return check()" action="save_imployee_information.php" method="post" enctype="multipart/form-data">
    <h1>Add the Employee Information</h1>

    <strong> Employee Name :</strong> <input type="text" name="eid" ><br><br>
    <strong>Employee Pass :</strong>  <input type="text" name="ep" ><br><br>
    <strong>Employee Id :</strong>  <input type="text" name="en" ><br><br>
    <strong>Employee Age :</strong> <input type="text" name="ea" ><br><br>
    <strong>Employee Salary :</strong> <input type="text" name="es" ><br><br>
    <strong> Gender:</strong>  <input type="radio" name="gender" value="Female">Female
               <input type="radio" name="gender" value="Male">Male
               <br><br>
      <strong> Country:</strong><select  name="country" id="country">
              <option value="Bangladesh">Bangladesh</option>
              <option value="USA">USA</option>

              <option value="Germany">Germany</option>
      </select>
      <br><br>
      <strong> Image :</strong> <input type="file" name="image" id="picture"> <br><br>


      <input type="submit" name="submit" value="submit">
      </form>

<script>
  function check(){
    var emid = document.form.eid.value;
    var pass = document.form.ep.value;
    var name = document.form.en.value;
    var age = document.form.ea.value;
    var salary = document.form.es.value;
    var gender = document.form.gender.value;
    var country = document.form.country.value;
    var image = document.form.image.value;


    if(emid==""){
      alert("Employee ID filled can not be empty");
      return false;
      }
  if(pass==""){
        alert("Employee Password filled can not be empty");
        return false;
        }

        if(name==""){
          alert("Employee Name filled can not be empty");
          return false;
          }

          if(age==""){
            alert("Employee Age filled can not be empty");
            return false;
            }

            if(salary==""){
            alert("Employee Salary filled can not be empty");
            return false;
            }


        else if(age<18){
          alert("Employee Age must be Greater than or equal 18");
          return false;
        }
        if(gender==""){
          alert("Gender filled are not  empty");
          return false;
          }
          if(image==""){
            alert("Image filled are not  empty");
            return false;
            }

  }
</script>

  </body>
</html>
