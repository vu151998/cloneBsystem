<div>
    <form wire:submit.prevent="save">
            @if ($photo)
                @php
                    try {
                        $url = $photo->temporaryUrl();
                        $photoStatus = true;
                    }catch (RuntimeException $exception){
                        $this->photoStatus =  false;
                    }
                @endphp
                @if($photoStatus)
                    <img src="{{$url}}" class="img-fluid ${2|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"  alt="">
                @else
                    <img src="{{ url('assets\img\no_image.jpg')}}" class="img-fluid ${2|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" 
                                        style="width: 50%; height: auto;" alt="">
                @endif
            @else
                <img src="{{ url('assets\img\no_image.jpg')}}" class="img-fluid ${2|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" 
                                    style="width: 50%; height: auto;" alt="">    
            @endif
        <div class="custom-file mb-3 col-4" style="padding-top: 1%">
            <input type="file" wire:model="photo" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Chọn file ảnh</label>
            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </form>
    
</div>
