{{extends file="layout.tpl"}}



{block name=body}
    <h1>Registraton Page </h1>
    <div class="container">
    <div class="row">
    <div class="col-lg-4 ">
    <div class="panel panel-info">
    <div class="panel panel-heading"> REGISTRATION FORM </div>
    <div class="panel-body">
    <form action="crud.php" method="POST">
       <div class="form-group">
    <label for="id"> EMPLOYEE ID </label>
    <input type="text" name="emp_id" class="form-control">
    </div>
    <div class="form-group">
    <label for="id"> EMPLOYEE NAME </label>
    <input type="text" name="emp_name" class="form-control">
    
    </div>
    <div class="form-group">
    <label for=""> PASSWORD </label>
    <input type="password" name="pass" class="form-control">
    </div>
    <div class="form-group">
    <label for=""> CITY</label>
    <input type="text" name="city" class="form-control">
    </div>
    <div class="form-group">
    <label for=""> STATUS </label>
    <input type="text" name="status" class="form-control">
    </div>
    <button class="btn btn-primary"> REGISTER </button>

    </div>
    </div>
    </div>
    </div>
    
    </div>
    

    </form>
 
{/block}