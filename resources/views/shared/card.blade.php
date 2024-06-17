<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('property.show',['slug'=>$prop->getSlug(),'property'=>$prop]) }}">{{ $prop->title }}</a>
        </h5>
        <p class="card-text">{{ $prop->surface }}mxm - {{ $prop->city }} - ({{ $prop->postal_code }})</p>
        <p class="text-primary">{{ number_format($prop->price) }} $</p>

    </div>
</div>
