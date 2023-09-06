@extends('layout.masterlayout')

@section('content')

@if($data)

    <form id ="st-form" action="#" method="get">
        <div class='form-div'>
            <input type="text" id="st-id" value="{{$data->st_id}}" hidden>
            <label for="st-name" class="form-label">Name: </label>
            <input type="text" class='form-input' id="st-name" value="{{$data->name}}" required>
        </div>
        <div class='form-div'>
            <label for="st-age" class="form-label">Age: </label>
            <input type="number" class='form-input' id="st-age" value="{{$data->age}}" required>
        </div>
        <div class='form-div'>
            <label for="st-email" class="form-label">Email: </label>
            <input type="email" class='form-input' id="st-email" value="{{$data->email}}" required>
        </div>
        <div class='form-div'>
            <label for="st-city" class="form-label">City: </label>
            <input type="number" class='form-input' id="st-city" value="{{$data->city}}" required>
        </div>
        <div class='form-div center'>
            <input type="button" class='form-btn' value="Submit" id="submit">
        </div>
    </form>
@endif

@endsection

@push('child-script')
<script>
    const submitEl = document.getElementById('submit')
    const formEl = document.getElementById('st-form')
    submitEl.addEventListener('click',function(e){
        e.preventDefault()

        debugger;
        const id = document.getElementById('st-id').value
        const name = document.getElementById('st-name').value
        const age = document.getElementById('st-age').value
        const email = document.getElementById('st-email').value
        const city = document.getElementById('st-city').value

        let url = `/updateStudent/${id}/${name}/${age}/${email}/${city}`;
        async function setData(){
            debugger;
            const response = await fetch(url);
            const data = await response.json();
            if(response.status === 200){
                if(response.status === 200){
                    formEl.innerHTML += `
                    <div class='form-div message'>
                        Message: ${data.message}
                    </div>                
                    `
                }
            }
        }
        setData();
    })
</script>     
@endpush


