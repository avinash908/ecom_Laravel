<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
    	
        DB::table('cities')->insert([
        	
        	// Sindh cities

		['city_name'=>'Badin','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Bhirkan','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Rajo Khanani','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chak','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dadu','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Digri','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Diplo','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dokri','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ghotki','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Haala','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Hyderabad','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Islamkot','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jacobabad','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jamshoro','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jungshahi','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kandhkot','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kandiaro','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Karachi','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kashmore','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Keti Bandar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Khairpur','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kotri','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Larkana','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Matiari','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mehar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mirpur Khas','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mithani','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mithi','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mehrabpur','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Moro','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Nagarparkar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Naudero','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Naushahro Feroze','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Naushara','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Nawabshah','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Nazimabad','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Qambar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Qasimabad','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ranipur','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ratodero','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Rohri','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sakrand','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sanghar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shahbandar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shahdadkot','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shahdadpur','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shahpur Chakar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shikarpaur','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sukkur','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Tangwani','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Tando Adam Khan','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Tando Allahyar','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Tando Muhammad Khan','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Thatta','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Umerkot','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Warah','state_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],

	    // Punjab cities

	    ['city_name'=>'Islamabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ahmed Nager Chatha','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ahmadpur East','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ali Khan Abad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Alipur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Arifwala','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Attock','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Bhera','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Bhalwal','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Bahawalnagar','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Bahawalpur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Bhakkar','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Burewala','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chillianwala','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chakwal','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chichawatni','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chiniot','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chishtian','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Daska','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Darya Khan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dera Ghazi Khan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dhaular','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dina','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dinga','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dipalpur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Faisalabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Fateh Jhang','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ghakhar Mandi','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Gojra','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Gujranwala','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Gujrat','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Gujar Khan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Hafizabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Haroonabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Hasilpur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Haveli','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Lakha','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jalalpur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jattan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jampur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jaranwala','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jhang','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jhelum','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kalabagh','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Karor Lal Esan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kasur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kamalia','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kamoke','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Khanewal','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Khanpur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kharian','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Khushab','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kot Adu','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jauharabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Lahore','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Lalamusa','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Layyah','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Liaquat Pur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Lodhran','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Malakwal','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mamoori','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mailsi','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mandi Bahauddin','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'mian Channu','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mianwali','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Multan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Murree','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Muridke','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mianwali Bangla','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Muzaffargarh','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Narowal','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Okara','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Renala Khurd','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Pakpattan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Pattoki','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Pir Mahal','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Qaimpur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Qila Didar Singh','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Rabwah','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Raiwind','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Rajanpur','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Rahim Yar Khan','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Rawalpindi','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sadiqabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Safdarabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sahiwal','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sangla Hill','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sarai Alamgir','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sargodha','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shakargarh','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sheikhupura','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sialkot','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sohawa','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Soianwala','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Siranwali','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Talagang','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Taxila','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Toba Tek  Singh','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Vehari','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Wah Cantonment','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Wazirabad','state_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],


	    // Balochistan cities


	      ['city_name'=>'Awaran','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Barkhan','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chagai','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dera Bugti','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Gwadar','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Harnai','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jafarabad','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Jhal Magsi','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kacchi','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kalat','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kech','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kharan','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Khuzdar','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Killa Abdullah','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Killa Saifullah','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kohlu','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Lasbela','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Lehri','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Loralai','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mastung','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Musakhel','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Nasirabad','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Nushki','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Panjgur','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Pishin valley','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Quetta','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sherani','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sibi','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Sohbatpur','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Washuk','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Zhob','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ziarat','state_id'=>3,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],


	    // KPP Cities

	    ['city_name'=>'Islamabad','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Abbottabad','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Adezai','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Alpuri','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Akora Khattak','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Ayubia','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Banda Daud Shah','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Bannu','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Batkhela','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Battagram','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Birote','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chakdara','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Charsadda','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Chitral','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Daggar','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dargai','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Darya Khan','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'dera Ismail Khan','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Doaba','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Dir','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Drosh','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Hangu','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Haripur','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Karak','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kohat','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Kulachi','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Lakki Marwat','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Latamber','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Madyan','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mansehra','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mardan','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mastuj','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Mingora','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Nowshera','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Paharpur','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Pabbi','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Peshawar','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Saidu Sharif','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shorkot','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Shewa Adda','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Swabi','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Swat','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Tangi','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Tank','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Thall','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Timergara','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
	    ['city_name'=>'Tordher','state_id'=>4,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],

	]);

    }
}