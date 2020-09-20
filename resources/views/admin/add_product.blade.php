@extends('admin.admin_layout')

@section('admin_content')


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Add Manufacture</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufacture</h2>
            <div class="box-icon">
              
            </div>
        </div>

        <p class="alert-success">
          <?php
            $message = Session::get('message');
            if($message){
              echo $message;
              Session::put('message',null);
            }
            
            ?>

        </p>
        <div class="box-content">
        <form class="form-horizontal" method="post" action="{{url('/save-manufacture')}}">

                {{csrf_field()}}
              <fieldset>
                
                <div class="control-group">
                  <label class="control-label" for="date01">Product Name</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge " name="product_name" required>
                  </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="selectError3">Product Category</label>
                    <div class="controls">
                      <select id="selectError3">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                      </select>
                    </div>
                  </div>


                  <div class="control-group">
                    <label class="control-label" for="selectError3">Manufacture Name</label>
                    <div class="controls">
                      <select id="selectError3">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                      </select>
                    </div>
                  </div>
                        


                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Product Short Description</label>
                  <div class="controls">
                    <textarea class="cleditor" id="textarea2" name="manufacture_description" rows="3" required></textarea>
                  </div>
                </div>

                
                
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Long Description</label>
                    <div class="controls">
                      <textarea class="cleditor" id="textarea2" name="manufacture_description" rows="3" required></textarea>
                    </div>
                  </div>
  

                  <div class="control-group">
                    <label class="control-label" for="date01">Product Price</label>
                    <div class="controls">
                      <input type="text" class="input-xlarge " name="product_name" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="fileInput">Product Image</label>
                    <div class="controls">
                      <input class="input-file uniform_on" id="fileInput" type="file">
                    </div>
                  </div> 
  
                  <div class="control-group">
                    <label class="control-label" for="date01">Product Size</label>
                    <div class="controls">
                      <input type="text" class="input-xlarge " name="product_name" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="date01">Product Color</label>
                    <div class="controls">
                      <input type="text" class="input-xlarge " name="product_name" required>
                    </div>
                  </div>
  

                <div class="control-group">
                    <label class="control-label" for="date01">Publication Status</label>
                    <div class="controls">
                      <input type="checkbox" class="input-xlarge" name="publication_status"  value="1">
                    </div>
                  </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                  <button type="reset" class="btn">Cancel</button>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
    
@endsection