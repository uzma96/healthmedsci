<?php

namespace App\Http\Helper;

use App\Models\Journal;
use App\Models\JournalDetails;
use Exception;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpWord\IOFactory;

class Helper
{
	public function newPublicationToAdminMail($subject,$url)
	{
		Mail::to(['bappa2du@gmail.com','alam.ifta@gmail.com'])
        	->send(new App\Mail\NewPublicationToAdmin($subject,$url));
        return 1;
	}

	public function journalPdf($journal_id)
    {
        $journal = JournalDetails::where('journal_id',$journal_id)->where('document_type','Menuscript')->first();

        $src = 'storage/'.$journal->document_src;
//        dd($src);
        try{
            $phpWord = IOFactory::load($src);
        }catch (Exception $exception){
            return $exception->getMessage();
        }
        $objWriter = IOFactory::createWriter($phpWord, 'HTML');
        $objWriter->save('storage/temp.html');
        return \PDF::loadFile('storage/temp.html')->stream('download.pdf');
    }
}