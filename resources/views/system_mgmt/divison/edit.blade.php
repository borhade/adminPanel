<div class="col-sm-6">
            <h3 class="m-t-none m-b">Address</h3>
            {!! Form::open(['action'=>'postsController@store','method'=>'post','id'=>''])!!}   
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
              </div>
              <div class="form-group">
                  <label for="title">title:</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
              </div>
              <div class="form-group">
                  <label for="body">body:</label>
                  <input type="text" class="form-control" id="body" placeholder="Enter body" name="body">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>  
          {!!Form::close()!!}
        </div>