@extends('admin_home.layout')

@section('page_name','Gallery')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>GALLERY SECTION</h2>
            </div>
            <button id="popup-1-button" onclick="BrowseServer();" class="btn bg-teal waves-effect">OPEN GALLERY</button><br/><br/>
            <p>Click on the button then your can change the galley content in gallery folder.</p>

        </div>
    </section>
@endsection