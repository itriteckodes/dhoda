@extends('user.layout.index')

@section('title')
    Make Payment
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Make Payment Through Stripe</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a href="{{route('user.make.payment',$course->id)}}"><button class="btn btn-primary col-md-12">Pay By Paypal</button></a>
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
                @endif
                <form action="{{route('user.purchase.store')}}" method="post" class="require-validation"
                data-cc-on-file="false" data-stripe-publishable-key="pk_test_51IuHKZLgbfnjeGnT4siF3ykEBcc365lZnd5zN9iWUlK0I9Zdr8i3xXpDPQ5lleXy3QETK4DqtthCmtfb2uzDKmoC00CvD6sV3T" id="payment-form" 
                enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 required">
                            <label>Name On Card</label>
                            <input type="text" size="4" class="form-control" required>
                        </div>  
                        <div class="form-group col-md-6 credit-cart required">
                            <label>Card Number</label>
                            <input type="text"  autocomplete="off" id="credit-card" class="form-control card-number" required>
                        </div>    
                        <div class="form-group col-md-6 cvc required">
                            <label>CVC</label>
                            <input type="text" size="4" maxlength="3" autocomplete="off" class="form-control card-cvc" required>
                        </div>   
                        <div class="form-group col-md-6 expiration required">
                            <label>Expiration Month</label>
                            <input type="text" size="2" maxlength="2"  placeholder="MM" class="form-control card-expiry-month"  required>
                        </div>   
                        <div class="form-group col-md-6 expiration required">
                            <label>Expiration Year</label>
                            <input type="text" size="2"  maxlength="4" placeholder="YYYY" class="form-control card-expiry-year"  required>
                        </div>   
                           
                    </div>
                    <div class='form-row row'>
                        <div class='col-md-12 hide error form-group' style="display: none">
                            <div class='alert-danger alert'>Fix the errors before you begin.</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Pay Now (${{$course->price}}) 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.append("<input type='hidden' name='course_id' value='{{$course->id}}'/>");
            $form.append("<input type='hidden' name='user_id' value='{{Auth::user()->id}}'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>
<script>
    input_credit_card = function(jQinp)
{
    var format_and_pos = function(input, char, backspace)
    {
        var start = 0;
        var end = 0;
        var pos = 0;
        var value = input.value;

        if (char !== false)
        {
            start = input.selectionStart;
            end = input.selectionEnd;

            if (backspace && start > 0) // handle backspace onkeydown
            {
                start--;

                if (value[start] == " ")
                { start--; }
            }
            // To be able to replace the selection if there is one
            value = value.substring(0, start) + char + value.substring(end);

            pos = start + char.length; // caret position
        }

        var d = 0; // digit count
        var dd = 0; // total
        var gi = 0; // group index
        var newV = "";
        var groups = /^\D*3[47]/.test(value) ? // check for American Express
        [4, 6, 5] : [4, 4, 4, 4];

        for (var i = 0; i < value.length; i++)
        {
            if (/\D/.test(value[i]))
            {
                if (start > i)
                { pos--; }
            }
            else
            {
                if (d === groups[gi])
                {
                    newV += " ";
                    d = 0;
                    gi++;

                    if (start >= i)
                    { pos++; }
                }
                newV += value[i];
                d++;
                dd++;
            }
            if (d === groups[gi] && groups.length === gi + 1) // max length
            { break; }
        }
        input.value = newV;

        if (char !== false)
        { input.setSelectionRange(pos, pos); }
    };

    jQinp.keypress(function(e)
    {
        var code = e.charCode || e.keyCode || e.which;

        // Check for tab and arrow keys (needed in Firefox)
        if (code !== 9 && (code < 37 || code > 40) &&
        // and CTRL+C / CTRL+V
        !(e.ctrlKey && (code === 99 || code === 118)))
        {
            e.preventDefault();

            var char = String.fromCharCode(code);

            // if the character is non-digit
            // -> return false (the character is not inserted)

            if (/\D/.test(char))
            { return false; }

            format_and_pos(this, char);
        }
    }).
    keydown(function(e) // backspace doesn't fire the keypress event
    {
        if (e.keyCode === 8 || e.keyCode === 46) // backspace or delete
        {
            e.preventDefault();
            format_and_pos(this, '', this.selectionStart === this.selectionEnd);
        }
    }).
    on('paste', function()
    {
        // A timeout is needed to get the new value pasted
        setTimeout(function()
        { format_and_pos(jQinp[0], ''); }, 50);
    }).
    blur(function() // reformat onblur just in case (optional)
    {
        format_and_pos(this, false);
    });
};

input_credit_card($('#credit-card'));

</script>
@endsection