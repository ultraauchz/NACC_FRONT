<?
    function db_to_date($data = false) {
        if(!$data) return false;

        $data = strtotime($data);
        $rs = 'วันที่ '.date('d/m/', $data).(date('Y', $data)+543).' เวลา '.date('H:i', $data);
        return $rs;
    }
    ?>