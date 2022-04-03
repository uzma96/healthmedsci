@extends('journal.layout')

@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			  ></script>
		
	
	<script>
	$(document).ready(function() {
    var max_fields      = 3; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
	
	
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
	
		     //text box increment
            $(wrapper).append('<div class="input_fields_wrap"><button class="add_field_button">Add More Fields</button><div class="col-md-5"><div class="form-group"><label for="salutation">Title</label><select name="salutation" id="salutation" class="form-control input-sm"><option value="Prof.">Prof.</option><option value="Dr.">Dr.</option><option value="Mr.">Mr.</option><option value="Ms.">Ms.</option></select></div></div><div class="col-md-5"><div class="form-group"><label for="">First Name</label><input type="text" placeholder="First Name" class="form-control input-sm" name="first_name"></div></div><div class="col-md-5"><div class="form-group"><label for="">Last Name</label><input type="text" placeholder="Last Name" class="form-control input-sm" name="last_name"></div></div><div class="col-md-6"><div class="form-group"><label for="">Email</label><input type="email" placeholder="Email" class="form-control input-sm" name="email"></div></div><div class="col-md-5"><div class="form-group"><label for="">Tel</label><input type="text" placeholder="" class="form-control input-sm" name="tel"></div></div><div class="col-md-5"><div class="form-group"><label for="">ORCID ID</label><input type="text" placeholder="" class="form-control input-sm" name="orcid_id"></div></div><div class="col-md-6"><div class="form-group"><label for="">Affiliation</label><textarea name="affiliation" placeholder="Affiliation" class="form-control input-sm"></textarea></div></div><div class="form-check form-check-inline"><lable>Correspondent Author</lable><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes"><label class="form-check-label" for="inlineCheckbox1">Yes</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No"><label class="form-check-label" for="inlineCheckbox2">No</label></div><div class="form-group"><label for="country">Country</label><select name="country" id="country" class="form-control input-sm"><option value="Bangladesh">Bangladesh</option><option value="Germany">Germany</option><option value="Finland">Finland</option> </select></div></div><br><a href="#" class="remove_field">Remove</a></div>');
            x++; 
	  }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
		e.preventDefault(); 
		$(this).parent('div').remove(); 
		x--;
    })
});


	
	</script>

<div class="container">
    
    
<form id="regForm" enctype="multipart/form-data">
    
    {{csrf_field()}}
    
    
      <input type="hidden" value="{{$journal_id}}" name="journal_id">
      
     <div class="form-group">
                                    <label>Article Type</label>
                                    <select type="text" class="form-control" name="article_type">
                                        
                    
                                <option>Original Research</option>
                                <option>Review Article</option>
                                <option>Editorial</option>
                                <option>Brief Report</option>
                                <option>Case Report</option>
                                <option>Opinion</option>
                                <option>Prospective</option>
                            
                            </select>
                                        
                                </div>
                                
                                   <div class="form-group">
                                    <label>Enter Research Paper Title</label>
                                    <input type="text" class="form-control" name="paper_title"
                                           placeholder="Enter Paper Title"
                                           required="" >
                                </div>
                                <div class="form-group">
                                    <label for="">Abstract</label>
                                    <textarea name="abstract" id="editor" class="form-control" rows="8"
                                              placeholder="Abstract"
                                              style="height: 300px"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Keywords</label>
                                    <textarea name="keywords" id="" class="form-control" rows="2"
                                              placeholder="Keywords" required></textarea>
                                </div>
                                
                                
                                  <div class="form-group">
                                    <label>Area of Research</label>
                                    <select name="area_of_research" id="" required class="form-control">
                                        <option value="">Area of Research</option>
                                        @foreach($category as $c)
                                            <option value="{{$c->category_title}}" {{old('area_of_research')==$c->category_title?'selected':''}}>{{$c->category_title}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Menuscript Document List</label>
                                    <div class="document-table"></div>
                                    <input type="file" id="exampleInputFile" name="attachment"
                                           class="form-control-file"
                                           accept="image/png,image/jpeg,image/jpg,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">

                                    <p class="help-block">Select Research paper ex.pdf,doc file</p>
                                    <div class="file-warning" hidden></div>
                                </div>
    
    </div>

        
        <h1 style="text-align:center;">Author List</h1>
        
            
           <div class="input_fields_wrap">
<button class="add_field_button">Add Author</button>
<div class="col-md-5">
                                <div class="form-group">
                                    <label for="salutation">Title</label>
                                    <select name="salutation" id="salutation" class="form-control input-sm">
                                        <option value="Prof.">Prof.</option>
                                        <option value="Dr.">Dr..</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" placeholder="First Name" class="form-control input-sm"
                                           name="first_name">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" placeholder="Last Name" class="form-control input-sm"
                                           name="last_name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Email" class="form-control input-sm" name="email">
                                </div>
                                  
                            </div>
                            
                             <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Tel</label>
                                    <input type="text" placeholder="" class="form-control input-sm"
                                           name="tel">
                                </div>
                            </div>
                            
                             <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">ORCID ID</label>
                                    <input type="text" placeholder="" class="form-control input-sm"
                                           name="orcid_id">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Affiliation</label>
                                    <textarea name="affiliation" placeholder="Affiliation"
                                              class="form-control input-sm"></textarea>
                                </div>
                            </div>
                        <div class="form-check form-check-inline">
                            <lable>Correspondent Author</lable>
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
  <label class="form-check-label" for="inlineCheckbox2">No</label>
</div>



                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="country" id="country" class="form-control input-sm">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Germany">Germany</option>
                                <option value="Finland">Finland</option>
                            </select>
                        </div>
	
     </div>
        
        
   
 
    
</form>
    
</div><!--class container ends-->

@stop