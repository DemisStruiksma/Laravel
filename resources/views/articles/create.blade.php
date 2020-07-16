@extends ('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="POST" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                        
                            <p>{{ $errors->first('title') }}</p>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt"></textarea>

                        <p>{{ $errors->first('excerpt') }}</p>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body"></textarea>

                        <p>{{ $errors->first('body') }}</p>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection