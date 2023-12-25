<!-- resources/views/your/view.blade.php -->

<form id="myForm" action="{{ route('variable') }}" method="GET" style="display: none;">
    @csrf
    <input type="hidden" name="id" id="variableInput" value="">
    <button type="submit">Submit</button>
</form>

<a href="#" onclick="submitForm()">Click Here</a>

<script>
    // Assuming you have a JavaScript variable named 'yourVariable'
    var yourVariable = 'nikal';

    // Set the value of the hidden input
    document.getElementById('variableInput').value = yourVariable;

    // Function to submit the form
    function submitForm() {
        document.getElementById('myForm').submit();
    }
</script>



{{-- 
<script>
    // Assuming you have a JavaScript variable named 'yourVariable'
    var yourVariable = 'some value';

    console.log('Your Variable:', yourVariable); // Log the variable before the request

    // Send a Fetch API request to the Laravel route
    fetch('/get-variable?variable=' + encodeURIComponent(yourVariable))
        .then(response => response.json())
        .then(data => {
            // Handle the response if needed
            console.log('Response:', data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
</script> --}}

