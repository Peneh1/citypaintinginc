<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public static function index(){
        $data = [
            [
                'title' => 'Taping',
                'text' => 'Our services includes offering authentic and premium taping solutions that also feature topnitch drywall honing. As a part of this service, our clients also get the most reliable texturing solutions. You can all of this premium package at very competitive prices.',
                'img' => 'taping.jpg'
            ],

            [
                'title' => 'Kadex',
                'text' => 'Kadex is a vinyl-based material layer used as a finish to the underside of already formed concrete slabs. This is a method used in either new construction or areas of renovation to cover existing concrete or fill up areas of imperfections that will then dry to a smooth finish that can be painted. Kadex can be left colored or uncolored, according to your requirements.',
                'img' => 'kadex.jpg'
            ],

            [
                'title' => 'Faux Finishes',
                'text' => 'Our professionally trained staff members are expert painters that have the right tools and steady hands to give your interior just the artistic touch it needs. We can recreate any design you desire and transform your interior into your ideal living space. That is why we are the top choice in Tri-State area for texture and faux painting service.',
                'img' => 'faux-finishes.jpg'
            ],

            [
                'title' => 'Painting',
                'text' => 'From planning to execution, our professional painters and stylers will blend seamlessly into your home painting project, giving you the desired results.',
                'img' => 'painting.jpg'
            ],
 
           [
                'title' => 'Vanetian Plaster',
                'text' => 'Venetian Plaster is made from limestone rocks heated with water combined with different natural colorants such as ground marble dust. Different techniques and organic pigments are used to create various designs and texture. The addition of these textured layers and colors give Venetian plaster an elegant and rich look fit for royalty.',
                'img' => 'vanetian.jpg'
            ],
        
           [
                'title' => 'Wallpaper Hanging',
                'text' => 'Our team has the knowledge, tools and products to perform wallpaper or vinyl wallcovering installation as well as removing that old wallpaper including the preparation of the surface for the new residential or commercial wallpaper.',
                'img' => 'wall-paper.jpg'
            ],

            [
                'title' => 'Intumescent Painting',
                'text' => ' Intumescent paint is the most commonly used coating to protect steel against fire and acts as an insulator, forming a solid char in response to heat. We at City Painting, assures proper application of these materials by our specialized, highly trained paint crews. Strict safety, property and site protection protocols mean quality results.',
                'img' => 'intumescent.jpg'
            ],
/*
            [
                'title' => 'Electrostatic Painting',
                'text' => 'In order to achieve the spectacular results that electrostatic painting is famous for, Spectrum’s skilled journeymen are knowledgeable and thorough in every stage of the process. Every surface that will be painted is properly cleaned and prepared, and all non-painted parts are carefully masked or taped.',
                'img' => 'electrostatic.jpg'
            ],
*/
            [
                'title' => 'Epoxy Paint',
                'text' => 'Applying and repairing epoxy floor coatings for business and commercial buildings with extended durability in mind takes skill and experience. The floor coating specialists at City Painting will ensure that your commercial epoxy floor coating project is planned and completed successfully.',
                'img' => 'epoxy.jpg'
            ],
        ];

        return $data;
    }
}
