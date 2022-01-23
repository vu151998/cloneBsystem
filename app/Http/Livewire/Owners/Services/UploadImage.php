<?php

namespace App\Http\Livewire\Owners\Services;

use App\Models\Image;
use App\Models\Prices;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;
    
    public $idServe;
    public $photo;
    public $photoStatus;
    public $serviceUpdate;
    public $urlPic;

    protected $listeners = ['openService'=>'updatedIdServe','updateImage'];
    public function mount($id){
        $this->idServe = $id;
        $this->photo =Image::where('cate_pro_id',$id)->first();
       
    }
   
    public function updatedPhoto()
    {
       $this->validate([
            'photo' => 'image|max:1024',]
        );
        $this->urlPic =$this->photo->store('files', 'public');
        
    }
   

    public function updateImage($value){
        
        if(!is_null($value['price'])){
            $newprice = new Prices();
            $newprice->service_id = $value['id'];
            $newprice->price_base =$value['price'];
            $newprice->save();
            Service::where('id',$value['id'] )
                ->update(['name' => $value['name'],
                        'price_id' => $newprice->id,
                        'phone' => $value['phone'],
                        'title' =>  $value['title'],
                        'description' => $value['description']
            ]);
        }else{
            Service::where('id',$value['id'] )
                ->update(['name' => $value['name'],
                        'phone' => $value['phone'],
                        'title' =>  $value['title'],
                        'description' => $value['description']]);
        }
        if(!$this->photoStatus){
            $image = new Image();
            $image->link=$this->urlPic;
            $image->cate_pro_id= $value['id'];
            $image->save();
        }
    }
    
    protected $messages = [
        'photo.image' => 'Hệ thống chỉ hỗ trợ định file jpeg,png,svg,jpg,gif',
    ];
    
    


    public function updatedIdServe(){
        $this->photo = Image::where('cate_pro_id',$this->idServe)->pluck('link')->first();;
    }
    
    
    public function render()
    {   
       
        return view('livewire.owners.services.upload-image');
    }
}
