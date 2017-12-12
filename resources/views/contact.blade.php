@extends('layout')

@section('title', '| Contact')

@section('content')


<section id="main">
    <div class="container">
        <div id="main-col">
            <h2>Contact Me</h2>
            <hr>
            <form action="{{ route('contactPost') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label name=name">Name:</label>
                    <input id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name=message">Message:</label>
                    <textarea id="message" name="message" class="form-control"></textarea>
                </div>

                <input type="submit" class="submit" value="Send Message">
            </form>
        </div>

        <aside id="sidebar">
          <div class="dark">
            <h3>Marcin Dyszkiewicz</h3>
            <p>sdfdfsdfsdfs</p>
          </div>
        </aside>
    </div>
</section>



@endsection