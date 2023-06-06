<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeaderSettingsRequest;
use App\Http\Requests\HomePageSettingsRequest;
use App\Http\Requests\RequestContactController;
use App\Settings\ContactSettings;
use App\Settings\HeaderSeetings;
use App\Settings\HomePageSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{



    public function index(HomePageSettings $settings)
    {
        // print_r($settings);exit;
        return view('settings.index', $settings->toArray());
    }
    public function update(HomePageSettings $settings, Request $request)


    {
        // dd($request->all());
        $input = $request->all();
        // print_r($input);
        // dd($input);
        // exit;

        // about app card section
        $aboutAppCard = $request->all('aboutappcard');
        // dd($aboutAppCard);


        // dd($aboutAppCard);
        $addAppCardData = [];
        if (!empty($input['aboutappcard'])) {

            $appCard = $aboutAppCard['aboutappcard'];
            foreach ($appCard as $index => $card) {
                $aboutAppTitle = $card['title'];
                if (empty($card['image'])) {
                    $aboutAppImage = $card['image'];
                    $filename = time() . "AboutAppIcon$index." . $aboutAppImage->getClientOriginalExtension();
                    $imageurl = Storage::putFileAs("AboutAppIcon", $aboutAppImage, $filename);
                    $imagepath = asset("storage/$imageurl");
                } else {
                    $imagepath = $card['image'];
                }


                $addAppCardData[] = [
                    'image' => $imagepath,
                    'title' => $aboutAppTitle,
                ];
            }
            // $appCardDataJson = json_encode($addAppCardData);
            // dd($appCardDataJson);
        }
        $input['about_app_card'] = json_encode($addAppCardData);



        // / arcodian section
        // $arcodian = $request->get('arcodian');
        $arcodianData = [];

        if (!empty($input['arcodian'])) {
            foreach ($input['arcodian'] as $acc) {
                $arcodianTitle = $acc['title'];
                $arcodianDescription = $acc['description'];
                $arcodianData[] = [
                    'title' => $arcodianTitle,
                    'description' => $arcodianDescription,
                ];
            }
            // $arcodianDataJson = json_encode($arcodianData);
        }
        $input['arcodian'] = json_encode($arcodianData);

        /// our team section
        // $ourTeam = $request->all('ourteam');
        // dd($ourTeam);
        $ourTeamDetails = [];
        // dd($input['ourteam']);
        if (!empty($input['ourteam'])) {
            // dd($input['ourteam']);

            foreach ($input['ourteam'] as  $index => $meetTeam) {

                $teamName = $meetTeam['name'];
                $teamPosition = $meetTeam['position'];
                $teamExperiance = $meetTeam['experiance'];

                if (!empty($meetTeam['image'])) {
                    $teamImage = $meetTeam['image'];
                    $teamFileName = time() . "OutTeamImage$index." . $teamImage->getClientOriginalExtension();
                    $teamFileUrl = Storage::putFileAs("OutTeamImage", $teamImage, $teamFileName);
                    $teamFilePath = asset("storage/$teamFileUrl");
                } else {
                    $teamFilePath = $meetTeam['images'];
                }


                $ourTeamDetails[] = [
                    'name' => $teamName,
                    'position' => $teamPosition,
                    'experiance' => $teamExperiance,
                    'image' => $teamFilePath,
                ];
            }
        }

        $input['meet_our_team_description'] = json_encode($ourTeamDetails);


        /// kidoroma card

        $kidoromaCardData = [];

        if (!empty($input['whykidoroma'])) {

            foreach ($input['whykidoroma'] as $index => $item) {
                $cardTitle = $item['title'];

                if (!empty($item['image'])) {
                    $KidoromaImage = $item['image'];
                    $kidoromaFilename = time() . "WhyKidoromaImage$index." . $KidoromaImage->getClientOriginalExtension();
                    $kidoromaUrl = Storage::putFileAs("KidoromaImage", $KidoromaImage, $kidoromaFilename);
                    $kidoromapath = asset("storage/$kidoromaUrl");
                } else {
                    $kidoromapath = $item['images'];
                }

                if (!empty($item['image1'])) {
                    $KidoromaImage1 = $item['image1'];
                    $kidoromaFilename1 = time() . "WhyKidoromaIcon$index." . $KidoromaImage1->getClientOriginalExtension();
                    $kidoromaUrl1 = Storage::putFileAs("KidoromaIcons", $KidoromaImage1, $kidoromaFilename1);
                    $kidoromapath1 = asset("storage/$kidoromaUrl1");
                } else {
                    $kidoromapath1 = $item['images1'];
                }

                $kidoromaCardData[] = [
                    'title' => $cardTitle,
                    'image' => $kidoromapath,
                    'image1' => $kidoromapath1,
                ];
            }
        }
        $input['why_kidoroma_card'] = json_encode($kidoromaCardData);



        /// about app card




        /// banner image storing
        if ($request->file('photo_text_banner_image')) {
            $bannerImage = $request->file('photo_text_banner_image');
            $bannerfilename = time() . "bannerImage." . $bannerImage->getClientOriginalExtension();
            $bannerpath = Storage::putFileAs("bannerImage", $bannerImage, $bannerfilename);
            $photo_text_banner_image_path = asset("/storage/$bannerpath");
        } else {
            $photo_text_banner_image_path = $settings->photo_text_banner_image;
        };
        $input['photo_text_banner_image'] = $photo_text_banner_image_path;

        if ($request->file('about_app_image')) {
            $aboutAppImage = $request->file('about_app_image');
            $aboutappfilename = time() . "aboutAppImage." . $aboutAppImage->getClientOriginalExtension();
            $aboutApppath = Storage::putFileAs("aboutAppImage", $aboutAppImage, $aboutappfilename);
            $aboutAppPath = asset("/storage/$aboutApppath");
        } else {
            $aboutAppPath = $settings->about_app_image;
        };
        $input['about_app_image'] = $aboutAppPath;


        //         /// inventor image
        if ($request->file('about_the_inventor_image')) {
            $inventorImage = $request->file('about_the_inventor_image');
            $inventorfilename = time() . "invertorImage." . $inventorImage->getClientOriginalExtension();
            $inventorpath = Storage::putFileAs("inventorImage", $inventorImage, $inventorfilename);
            $about_the_inventor_image_path = asset("/storage/$inventorpath");
        } else {
            $about_the_inventor_image_path = $settings->about_the_inventor_image;
        }
        $input['about_the_inventor_image'] = $about_the_inventor_image_path;

        //        /// text journey image
        if ($request->file('text_journey_image')) {
            $journeyImage = $request->file('text_journey_image');
            $journeyfilename = time() . "textJourneyImage." . $journeyImage->getClientOriginalExtension();
            $journeypath = Storage::putFileAs("textJourneyImage", $journeyImage, $journeyfilename);
            $text_journey_image_path = asset("/storage/$journeypath");
        } else {
            $text_journey_image_path = $settings->text_journey_image;
        }
        $input['text_journey_image'] = $text_journey_image_path;


        //        /// text_journey_button1

        if ($request->file('text_journey_button1')) {
            $journeybutton1Image = $request->file('text_journey_button1');
            $journeybutton1filename = time() . "textJourneyButton1." . $journeybutton1Image->getClientOriginalExtension();
            $ourneybutton1path = Storage::putFileAs("textJourneyButton1", $journeybutton1Image, $journeybutton1filename);
            $text_journey_button1_path = asset("/storage/$ourneybutton1path");
        } else {
            $text_journey_button1_path = $settings->text_journey_button1;
        }
        $input['text_journey_button1'] = $text_journey_button1_path;

        //        /// text_journey_button2

        if ($request->file('text_journey_button2')) {
            $journeybutton2Image = $request->file('text_journey_button2');
            $journeybutton2filename = time() . "textJourneyButton2." . $journeybutton2Image->getClientOriginalExtension();
            $ourneybutton2path = Storage::putFileAs("textJourneyButton2", $journeybutton2Image, $journeybutton2filename);
            $text_journey_button2_path = asset("/storage/$ourneybutton2path");
        } else {
            $text_journey_button2_path = $settings->text_journey_button2;
        }
        $input['text_journey_button2'] = $text_journey_button2_path;





        $settings->fill($input);
        // dd($settings);
        $settings->save();

        return redirect()->route('settings')->with('success', 'Sucessfully updated settings');
    }

    public function contact(ContactSettings $settings)
    {


        return view('settings.contact', $settings->toArray());
    }
    public function updatecontact(RequestContactController $request, ContactSettings $settings)
    {
        $input = $request->all();
        $request->validated();


        $settings->fill($input);
        $settings->save();

        return redirect()->route('settings.contact')->with('success', 'Sucessfully updated settings');
    }

    public function header(HeaderSeetings $settings)
    {
        return view('settings.header', $settings->toArray());
    }
    public function updateheader(HeaderSettingsRequest $request, HeaderSeetings $settings)
    {
        $input = $request->all();
        $request->validated();
        if ($request->file('header_image')) {
            $headerImage = $request->file('header_image');
            $filename = time() . "headerImage." . $headerImage->getClientOriginalExtension();
            $headerimagepath = Storage::putFileAs("headerImage", $headerImage, $filename);
            $path = asset("/storage/$headerimagepath");
        }
        $input['header_image'] = $path;


        $settings->fill($input);
        $settings->save();

        return redirect()->route('settings.header')->with('success', 'Sucessfully updated settings');
    }
}
