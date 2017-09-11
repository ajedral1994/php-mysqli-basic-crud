# ABOUT THE REPO
* Beginners reference on how to connect to a MySQL database using the MySQLi extension.
* Class based Database connection
* Added a simple query builder that accepts SQL Queries
* Includes a very basic CRUD operation
* Added method chaining
---
## Todos
* Add more query builders
* Make use of AJAX for the CRUD part
* Integrate simple pagination plugin using vanilla js or jquery
* UI modification
* Integration of task runners or builders for css/js minifications
---

## Method Chaining

  Example of method chaining:
  
  **Include and Instantiate Database Class first**
  
  require_once('Database.php');
  
  $db = new Database();
  
  ### Returning all fields
  $result = $db->select()->from('user')->result(); //  return all fields from user table
  
  ### Specifying fields
  $result = $db->select('id, name')->from('user')->result(); // returns selected fields from user table

  ### Looping results
  while($obj = $result->fetch_object()) {
    
    $obj->name;
    $obj->id;
  }

  
  



**_Note:_** _For more feature requests please open up an issue._
