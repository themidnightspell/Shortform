$(document).ready(function() {
    var maxField = 10; //Input fields increment limitation
    var addProducer = $('.add_producer'); //Add button selector
    var producers = $('.producer_fields'); //Input field wrapper
    var addDirector = $('.add_director'); //Add button selector
    var directors = $('.director_fields'); //Input field wrapper
    var addWriter = $('.add_writer'); //Add button selector
    var writers = $('.writer_fields'); //Input field wrapper
    var addStory = $('.add_story'); //Add button selector
    var cast = $('.cast_fields'); //Input field wrapper
    var addCast = $('.add_cast'); //Add button selector
    var story = $('.story_fields'); //Input field wrapper
    var addComposer = $('.add_composer'); //Add button selector
    var composers = $('.composer_fields'); //Input field wrapper
    var addEditor = $('.add_editor'); //Add button selector
    var editors = $('.editor_fields'); //Input field wrapper
     var addHMUA = $('.add_hmua'); //Add button selector
    var hmua = $('.hmua_fields'); //Input field wrapper
    var addCinematographer = $('.add_cinematographer'); //Add button selector
    var cinematographers = $('.cinematographer_fields'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="" class="remove_button"><img src="icons8-minus-64.png" height = "20"/></a></div>'; //New input field html 
    var doubleField = '<div><input type="text" name="field_name[]" value=""/><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="icons8-minus-64.png" height = "20"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
  
    //Once add button is clicked
    $(addProducer).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(producers).append(fieldHTML); //Add field html
      }
    });
  
    //Once remove button is clicked
    $(producers).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
  
  
    //directors
    $(addDirector).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(directors).append(fieldHTML); //Add field html
      }
    });
  
    $(directors).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
  
    //writers
    $(addWriter).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(writers).append(fieldHTML); //Add field html
      }
    });
  
    $(writers).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
    //story by
    $(addStory).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(story).append(fieldHTML); //Add field html
      }
    });
  
    $(story).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
  
    //cast
    $(addCast).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(cast).append(doubleField); //Add field html
      }
    });
  
    $(cast).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
  
    //composers
    $(addComposer).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(composers).append(fieldHTML); //Add field html
      }
    });
  
    $(composers).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
  
    //cinematographers
    $(addCinematographer).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(cinematographers).append(fieldHTML); //Add field html
      }
    });
  
    $(cinematographers).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
    
     //editors
    $(addEditor).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(editors).append(fieldHTML); //Add field html
      }
    });
  
    $(editors).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
    
      //hmua
    $(addHMUA).click(function() {
      //Check maximum number of input fields
      if (x < maxField) {
        x++; //Increment field counter
        $(hmua).append(fieldHTML); //Add field html
      }
    });
  
    $(hmua).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Decrement field counter
    });
  });
  