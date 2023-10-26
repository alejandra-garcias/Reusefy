<?php

namespace App\Livewire;
use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Bus;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Jobs\GoogleVisionSafeSearchImage;

class CreateAd extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;
    public $image;

    protected $rules = [
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'category'=>'required',
        'price'=>'required|numeric',
    ];
    protected $messages = [
        'required'=>'Field :attribute is required, please fill it',
        'min'=>'Field :attribute should be longer than :min',
        'numeric'=>'Field :attribute must be a number',
        'temporary_images.required' => 'La imagen es obligatoria',
        'temporary_images.*.image' => 'Los archivos tienen que ser imagenes',
        'temporary_images.*.max' => 'La imagen supera los :max mb',
        'images.image' => 'El archivo tiene que ser una imagen',
        'images.max' => 'La imagen supera los :max mb',
    ];
    public function store(){
        $validateData = $this->validate();
        $category = Category::find($this->category);
        $ad = $category->ads()->create($validateData);
        Auth::user()->ads()->save($ad);
        if(count($this->images)){
            $newFileName = "ads/$ad->id";
            foreach($this->images as $image){
            $newImage = $ad->images()->create(['path'=>$image->store($newFileName,'public')]);
            dispatch(new ResizeImage($newImage->path,400,300));
            dispatch(new GoogleVisionSafeSearchImage($newImage->id));
        }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));

        }
        session()->flash('message','Anuncio creado con exito');
        $this->cleanForm();
    }
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->category='';
        $this->price='';
        $this->images=[];
    }
    public function render()
    {
        return view('livewire.create-ad');
    }
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:2048'
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
}
