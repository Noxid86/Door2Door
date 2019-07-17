jQuery(document).ready(function($) {

  // --------RESPONSE PANEL ACTIONS------------

  // CLOSE RESPONSE PANEL
  // ARGS: element to operate on ( should be 'this' )
  // ACTIONS: Closes the response panel
  function closeResponsePanel(element) {
    var contact = $(element).parents('section');
    contact.find('.response_button').fadeOut();
    contact.find('.response_wrapper').slideToggle();
    contact.find('.knock').removeClass('knock_active');
  };

  // OPEN RESPONSE PANEL
  // ARGS: element to operate on ( should be 'this' )
  // ACTIONS: Opens the response panel
  function openResponsePanel(element) {
    var contact = $(element).parents('section');
    contact.find('.knock').addClass('knock_active');
    contact.find('.response_wrapper').slideToggle();
  };

  // OPEN BUTTON SET
  // ARGS: element (usually 'this') and an array of buttons to activate
  // ACTIONS: Figures the width of each button by dividing the length
  // of the provided array, then shows and sizes those buttons.
  function openButtonSet(element, buttons) {
    var contact = $(element).parents('section');
    var button_length = buttons.length;
    var new_width = 100/button_length+'%';
    contact.find('.response_button').hide();
    for (var i = 0; i < buttons.length; i++) {
      contact.find(buttons[i]).fadeIn();
      contact.find(buttons[i]).css('width', new_width);
    };
  }
  // BUTTON SETS
  var button_sets = {
    knock: ['.contact', '.try_later', '.not_home', '.bad_address'],
    contact: ['.listed','.not_listed'],
    giving: ['.giving', '.not_giving']
  }

  // ----------- BUTTON EVENTS --------------

  // KNOCK
  $('.knock').on('click', function(){
    var contact = $(this).parents('section');
    if (contact.find('.response_wrapper').is(":visible")) {
      closeResponsePanel(this);
    } else {
      openResponsePanel(this);
      openButtonSet(this, button_sets.knock);
    };
  });

  // DONOR CONTACTED
  $('.contact').on('click', function(){
    var contact = $(this).parents('section');
    openButtonSet(this, button_sets.contact)
  });

  // DONOR NOT HOME
  $('.not_home').on('click', function(){
    closeResponsePanel(this);
  });

  // BAD ADDRESS
  $('.bad_address').on('click', function(){
    closeResponsePanel(this);
  });

  // TRY LATER
  $('.try_later').on('click', function(){
    closeResponsePanel(this);
  });

  // LISTED
  $('.listed').on('click', function(){
    var contact = $(this).parents('section');
    openButtonSet(this, button_sets.giving);
  });

  // NOT LISTED
  $('.not_listed').on('click', function(){
    var contact = $(this).parents('section');
    openButtonSet(this, button_sets.giving);
  });

  // GIVING
  $('.giving').on('click', function(){
    var contact = $(this).parents('section');
    closeResponsePanel(this);
  });

  // NOT GIVING
  $('.not_giving').on('click', function(){
    var contact = $(this).parents('section');
    closeResponsePanel(this);
  });
})
