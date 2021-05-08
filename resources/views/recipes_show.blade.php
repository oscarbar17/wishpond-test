@if(count($response['results']) == 0)
    <div class="alert alert-warning">
        No results
    </div>
@else
    @foreach($response['results'] as $recipt)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    {{$recipt['title']}}
                </div>
                <div class="card-body">
                    Ingredients:
                    {{$recipt['ingredients']}}
                </div>
                <div class="card-footer">
                    <a href="{{$recipt['href']}}" class="text-info pull-right text-primary" target="_blank">Recipe link</a>
                </div>
            </div>
        </div>
    @endforeach
@endif