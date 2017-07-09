@include('layouts._messages')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $title or 'title' }}
                </div>
                <div class="panel-body">
                    @include('layouts._errors')
                    {{ $content or 'conten' }}
                </div>
            </div>
        </div>
    </div>
</div>