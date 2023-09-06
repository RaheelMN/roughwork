@extends('layout.masterlayout')

@section('content')

    <form id ="st-form" action="/studentForm" method="POST">
        @csrf
        <div class='form-div'>
            <label for="st-name" class="form-label">Name: </label>
            <input type="text" class='form-input' id="st-name" required>
        </div>
        <div class='form-div'>
            <label for="st-age" class="form-label">Age: </label>
            <input type="number" class='form-input' id="st-age" required>
        </div>
        <div class='form-div'>
            <label for="st-email" class="form-label">Email: </label>
            <input type="email" class='form-input' id="st-email" required>
        </div>
        <div class='form-div'>
            <label for="st-city" class="form-label">City: </label>
            <input type="number" class='form-input' id="st-city" required>
        </div>
        <div class='form-div center'>
            <input type="button" class='form-btn' value="Submit" id="submit">
        </div>       
    </form>
@endsection

@push('child-script')
<script>
    const submitEl = document.getElementById('submit')
    const formEl = document.getElementById('st-form')
    submitEl.addEventListener('click',function(e){
        e.preventDefault()

        const name = document.getElementById('st-name').value
        const age = document.getElementById('st-age').value
        const email = document.getElementById('st-email').value
        const city = document.getElementById('st-city').value

        let url = `/addStudent/${name}/${age}/${email}/${city}`;
        async function setData(){
            debugger;
            const response = await fetch(url);
            const data = await response.json();
            if(response.status === 200){
                formEl.innerHTML += `
                <div class='form-div message'>
                    Message: ${data.message}
                </div>                
                `
            }
        }
        setData();
    })
</script>     
@endpush


