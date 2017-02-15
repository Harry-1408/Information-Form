<?php
class Data extends CI_Model {
    // private $tbl_projects = "";
    public function __construct()
    {
        $this->load->database();
        // $this->tbl_users = TABEL_PREFIX.'form';
    }

    public function insert_user() {  
        if (($this->input->post('email')) != NULL) {
            if (($this->input->post('occupation')) == "HJB") {
                    $job = array('email' => $this->input->post('email'), 'job_type' => $this->input->post('job_type'));
                    $data = array(
                    'surname' => $this->input->post('sn'),
                    'first_name' => $this->input->post('fn'),
                    'middle_name' => $this->input->post('mn'),
                    'address' => $this->input->post('home_address'),
                    'country' => $this->input->post('home_country'),            
                    'state' => $this->input->post('home_state'),
                    'city' => $this->input->post('home_city'),
                    'pincode' => $this->input->post('home_pinode'),
                    'mosad' => $this->input->post('home_mosad'),
                    'native_place' => $this->input->post('native'),
                    'occupation' => $this->input->post('occupation'),
                    'email_id' => $this->input->post('email'),
                    'birthdate' => $this->input->post('dob'),
                    'blood_group' => $this->input->post('bg'),
                    'contact_no' => $this->input->post('cn'),
                    'male_female' => $this->input->post('sex'),
                    'material_status' => $this->input->post('status'),
                    'head_or_not' => $this->input->post('head_check'),
                    'childrens' => $this->input->post('child'),
                    'boy' => $this->input->post('boy'),
                    'girl' => $this->input->post('girl'),
                );
                $this->db->insert('form_head', $data);
                $this->db->insert('form_job', $job);
                return true;
        } elseif (($this->input->post('occupation')) == "HBU") {
            $data = array(
            'surname' => $this->input->post('sn'),
            'first_name' => $this->input->post('fn'),
            'middle_name' => $this->input->post('mn'),
            'address' => $this->input->post('home_address'),
            'country' => $this->input->post('home_country'),            
            'state' => $this->input->post('home_state'),
            'city' => $this->input->post('home_city'),
            'pincode' => $this->input->post('home_pinode'),
            'mosad' => $this->input->post('home_mosad'),
            'native_place' => $this->input->post('native'),
            'occupation' => $this->input->post('occupation'),
            'email_id' => $this->input->post('email'),
            'birthdate' => $this->input->post('dob'),
            'blood_group' => $this->input->post('bg'),
            'contact_no' => $this->input->post('cn'),
            'male_female' => $this->input->post('sex'),
            'material_status' => $this->input->post('status'),
            'head_or_not' => $this->input->post('head_check'),
            'childrens' => $this->input->post('child'),
            'boy' => $this->input->post('boy'),
            'girl' => $this->input->post('girl'),
        );
        $this->db->insert('form_head', $data);
            $business = array('email' => $this->input->post('email'), 'business_name' => $this->input->post('business_name'),'business_number' => $this->input->post('business_number'),'business_address' => $this->input->post('business_address'),'business_country' => $this->input->post('business_country'),'business_state' => $this->input->post('business_state'),'business_city' => $this->input->post('business_city'),'business_pin' => $this->input->post('business_pinode')  );
            $this->db->insert('form_business', $business);
            return true;
        } else{
            echo "enter email id to proceed";
            return false;
        }

        }
        
        
        
    } 

    public function insert_partner() { 

    if (($this->input->post('peid')) != NULL) {
         $data = array(
            'name' => $this->input->post('pna'),
            'surname' => $this->input->post('psn'),
            'middle_name' => $this->input->post('pmn'),
            'address' => $this->input->post('padd'),
            'country' => $this->input->post('home_country_sub'),            
            'state' => $this->input->post('home_state_sub'),
            'city' => $this->input->post('home_city_sub'),
            'pincode' => $this->input->post('home_pinode_sub'),
            'occupation' => $this->input->post('pocc'),
            'email_id' => $this->input->post('peid'),
            'birthdate' => $this->input->post('pdob'),
            'blood_group' => $this->input->post('pbg'),
            'contact_no' => $this->input->post('pcn'),
            'male_female' => $this->input->post('psex'),
        );

         if (($this->input->post('pocc')) == 'PBU') {
            $business = array('email' => $this->input->post('peid'), 'business_name' => $this->input->post('personal_business_name_sub'),'business_number' => $this->input->post('personal_business_number_sub'),'business_address' => $this->input->post('business_address'),'business_country' => $this->input->post('business_country_sub_val'),'business_state' => $this->input->post('business_state_sub_val'),'business_city' => $this->input->post('business_city_sub_val'),'business_pin' => $this->input->post('business_pinode_sub_val')  );
            $this->db->insert('form_business', $business);
         }

        // form_partner is the name of the db table you are inserting in
        return $this->db->insert('form_partner', $data);
     } else{
        return false;
     }
        
    }

    public function update_user() {
        $email = $this->input->post('email'); 
        $data = array(
            'childrens' => $this->input->post('child'),
            'boy' => $this->input->post('boy'),
            'girl' => $this->input->post('girl'),
        );

        // users is the name of the db table you are inserting in
        // $this->db->select('email_id');
        $this->db->where('email_id', $email);
        $this->db->update('form_head', $data);
        // $this->db->from('form_head');
        
        return true;
    }

    public function insert_first_daughter() {  
        $data = array(
            'head_email' => $this->input->post('email'),
            'name' => $this->input->post('girl1_name'),
            'surname' => $this->input->post('girl1_surname'),
            'middle_name' => $this->input->post('girl1_middlename'),
            'email_id' => $this->input->post('girl1_email'),
            'birth_date' => $this->input->post('girl1_birthday'),
            'contact_no' => $this->input->post('girl1_contactno'),
            'blood_group' => $this->input->post('girl1_bg'),
            'mosad' => $this->input->post('girl1_mosad'),
            'native' => $this->input->post('girl1_native'),
            'education' => $this->input->post('girl1_education'),
            'material_status' => $this->input->post('girl1_material_status'),


        );
        // form_first_daughter is the name of the db table you are inserting in
        $this->db->insert('form_first_daughter', $data);

        //Adding First Achivement
        $achi = array(
            'child_email' => $this->input->post('girl1_email'),
            'achivements_name' => $this->input->post('g1_achivement1_name'),
            'month_year' =>  $this->input->post('g1_achivement1_my'),
        );
        if (($this->input->post('g1_achivement1_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding Seconnd Achivement
        $achi = array(
            'child_email' => $this->input->post('girl1_email'),
            'achivements_name' => $this->input->post('g1_achivement2_name'),
            'month_year' =>  $this->input->post('g1_achivement2_my'),
        );
        if (($this->input->post('g1_achivement2_name')) != NULL) {
             $this->db->insert('form_achivements', $achi);
        }

        //Adding Third Achivement
        $achi = array(
            'child_email' => $this->input->post('girl1_email'),
            'achivements_name' => $this->input->post('g1_achivement3_name'),
            'month_year' =>  $this->input->post('g1_achivement3_my'),
        );
        if (($this->input->post('g1_achivement3_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding Forth Achivement
        $achi = array(
            'child_email' => $this->input->post('girl1_email'),
            'achivements_name' => $this->input->post('g1_achivement4_name'),
            'month_year' =>  $this->input->post('g1_achivement4_my'),
        );
        if (($this->input->post('g1_achivement4_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

         
         return true;
    }

    public function insert_second_daughter(){  
        $data = array(
            'head_email' => $this->input->post('email'),
            'name' => $this->input->post('girl2_name'),
            'surname' => $this->input->post('girl2_surname'),
            'middle_name' => $this->input->post('girl2_middlename'),
            'email_id' => $this->input->post('girl2_email'),
            'birth_date' => $this->input->post('girl2_birthday'),
            'contact_no' => $this->input->post('girl2_contactno'),
            'blood_group' => $this->input->post('girl2_bg'),
            'mosad' => $this->input->post('girl2_mosad'),
            'native' => $this->input->post('girl2_native'),
            'education' => $this->input->post('girl2_education'),
            'material_status' => $this->input->post('girl2_material_status'),
        );
        // form_second_daughter is the name of the db table you are inserting in
        return $this->db->insert('form_second_daughter', $data);

        //Adding First achivement
        $achi = array(
            'child_email' => $this->input->post('girl2_email'),
            'achivements_name' => $this->input->post('g2_achivement1_name'),
            'month_year' =>  $this->input->post('g2_achivement1_my'),
        );
        if (($this->input->post('g2_achivement1_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding Second achivement
        $achi = array(
            'child_email' => $this->input->post('girl2_email'),
            'achivements_name' => $this->input->post('g2_achivement2_name'),
            'month_year' =>  $this->input->post('g2_achivement2_my'),
        );
        if (($this->input->post('g2_achivement2_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding Third achivement
        $achi = array(
            'child_email' => $this->input->post('girl2_email'),
            'achivements_name' => $this->input->post('g2_achivement3_name'),
            'month_year' =>  $this->input->post('g2_achivement3_my'),
        );
        if (($this->input->post('g2_achivement3_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding Forth achivement
        $achi = array(
            'child_email' => $this->input->post('girl2_email'),
            'achivements_name' => $this->input->post('g2_achivement4_name'),
            'month_year' =>  $this->input->post('g2_achivement4_my'),
        );
        if (($this->input->post('g2_achivement4_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }
         
    }

    public function insert_first_son() {  
        $data = array(
            'head_email' => $this->input->post('email'),
            'name' => $this->input->post('boy1_name'),
            'surname' => $this->input->post('boy1_surname'),
            'middle_name' => $this->input->post('boy1_middlename'),
            'email_id' => $this->input->post('boy1_email'),
            'birth_date' => $this->input->post('boy1_birthday'),
            'contact_no' => $this->input->post('boy1_contact'),
            'blood_group' => $this->input->post('boy1_bg'),
            'mosad' => $this->input->post('boy1_mosad'),
            'native' => $this->input->post('boy1_native'),
            'education' => $this->input->post('boy1_education'),
            'material_status' => $this->input->post('boy1_material_status'),
        );

        // form_first_son is the name of the db table you are inserting in
        $this->db->insert('form_first_son', $data);

        //Adding first Achivement
        $achi = array(
            'child_email' => $this->input->post('boy1_email'),
            'achivements_name' => $this->input->post('b1_achivement1_name'),
            'month_year' =>  $this->input->post('b1_achivement1_my'),
        );
        if (($this->input->post('b1_achivement1_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding Second Achivement
        $achi = array(
            'child_email' => $this->input->post('boy1_email'),
            'achivements_name' => $this->input->post('b1_achivement2_name'),
            'month_year' =>  $this->input->post('b1_achivement2_my'),
        );
        if (($this->input->post('b1_achivement2_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding Third Achivement
        $achi = array(
            'child_email' => $this->input->post('boy1_email'),
            'achivements_name' => $this->input->post('b1_achivement3_name'),
            'month_year' =>  $this->input->post('b1_achivement3_my'),
        );
        if (($this->input->post('b1_achivement3_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }

        //Adding first Achivement
        $achi = array(
            'child_email' => $this->input->post('boy1_email'),
            'achivements_name' => $this->input->post('b1_achivement4_name'),
            'month_year' =>  $this->input->post('b1_achivement4_my'),
        );
        if (($this->input->post('b1_achivement4_name')) != NULL) {
            $this->db->insert('form_achivements', $achi);
        }


         
    }
    
}

?>
                  
