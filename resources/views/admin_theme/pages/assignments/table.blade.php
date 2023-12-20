<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
.table-sortable tbody tr {
    cursor: move;
}
</style>
</head>
<body>
    

<form method="post" action="">
                @csrf
         <h3><b>Dail Bore Gauge OBR Sheet</b></h3><br>
       

            

            <div class="form-group col-lg-3" style="display:none">
                <input type="text" name="jobRequestNo" class="form-control" id="firstname" value="" >
                <label for="firstname">Job Request No</label>
                </div> 

           

              <div class="row clearfix">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-hover table-sortable" id="table">
                        <thead>
                            <tr >
                                <th class="text-center" rowspan="2">
                                    Sr.<br>No
                                </th>
                                <th class="text-center" rowspan="2">
                                    Set UUC Value in mm     (For Transmission )
                                </th>
                                <th class="text-center" colspan="5">
                                    Observed  Refrence Reading  in mm 
                                </th>
                                <th class="text-center" rowspan="2">
                                    Average value
                                </th>
                                <th class="text-center" rowspan="2">
                                 Std.<br> Deviation
                                </th>
                                <th class="text-center" rowspan="2">
                                Error/ Deviation
                                </th>
                               
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>

                  
                            </tr>
                          

                        </thead>
                        <tbody>

                      


                            <tr  class="hidden" >
                                <td >
                                    <input type="text" name='inputs[0][SNo]' value="1"  placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='inputs[0][stdValue]' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='inputs[0][X1]' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='inputs[0][X2]' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='inputs[0][X3]' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='inputs[0][X4]' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='inputs[0][X5]' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='' placeholder='#' class="form-control"/>
                                </td>
                                <td >
                                    <input type="text" name='' placeholder='#' class="form-control"/>
                                </td>
                            
                            </tr>


                            <tr  class="hidden1" id="abc">
                                <td style="text-align:center; font-size:12px"><b>Expended<br>Uncertainity</b></td>
                                  <td >
                                      <input colspan="2" type="text" name='E0StdValue' placeholder='#' class="form-control"/> 
                                  </td>
                                  <td >
                                      <input type="text" name='E0X1' placeholder='#' class="form-control"/>
                                  </td>
                                  <td >
                                      <input type="text" name='E0X2' placeholder='#' class="form-control"/>
                                  </td>
                                  <td >
                                      <input type="text" name='E0X3' placeholder='#' class="form-control"/>
                                  </td>
                                  <td >
                                      <input type="text" name='E0X4' placeholder='#' class="form-control"/>
                                  </td>
                                  <td >
                                    <input type="text" name='E0X5' placeholder='#' class="form-control"/>
                                </td>
                               </tr>

                            


                        </tbody>
                    </table>

                    <table>
                       
                    </table>
                </div>
            </div><br>
            <button id="add" type="button" name="add" class="btn btn-primary float-right">Add Row</button><br> 

          Testing Status <select name="status" class="form-control" style="width:300px">
                <option>Select</option>
                <option>Panding</option>
                <option>Complete</option>
            </select><br><br>

            <button type="submit" class="btn btn-common">Submit</button>

        </form>


        
<script>
     
     var i= 0;
     var No=1;
     console.log(i);
     $('#add').click(function(){
         ++i;
       
         ++No;
         console.log(i);
   
         $('#abc').before(
             `<tr>
          
                     <td >
                                                     <input type="text" value='`+No+`' name='inputs[`+i+`][SNo]'  placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][stdValue]' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][X1]' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][X2]' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][X3]' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][X4]' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][X5]' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='' placeholder='#' class="form-control"/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='' placeholder='#' class="form-control"/>
                                                 </td>
                                              
                                                
                                
                         </tr>
                         `
            
         );
     });
 
     $(document).on('click','.remove-table-row', function(){
         $(this).parents('tr').remove();
 
     });
 
     </script>


</body>
</html>