<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = [
                [
                    "ActionDate"=> "2022-02-04T15:14:49",
                    "CustomFields"=> null,
                    "EmailID"=> 336173157,
                    "EmailAddress"=> "mailto:sunil@crediteck.com",
                    "Created"=> "2021-12-29T10:25:45.417",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659035,
                    "EmailAddress"=> "mailto:sunil@ncrfs.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659036,
                    "EmailAddress"=> "mailto:scott@ncrfs.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659037,
                    "EmailAddress"=> "mailto:scott@achievefinance.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659038,
                    "EmailAddress"=> "mailto:alec@ncrfs.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659039,
                    "EmailAddress"=> "mailto:christopher.mountain@ncrfs.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659040,
                    "EmailAddress"=> "mailto:jonathan@ncrfs.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659041,
                    "EmailAddress"=> "mailto:mark.nicholson@ncrfs.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336659042,
                    "EmailAddress"=> "mailto:jonathanl@achievefinance.com",
                    "Created"=> "2021-12-30T14:53:35.823",
                    "Status"=> "Active",
                    "Links"=> []
                ],
                [
                    "ActionDate"=> "2022-02-07T13:00:02",
                    "CustomFields"=> null,
                    "EmailID"=> 336707531,
                    "EmailAddress"=> "mailto:wtmrm5@gmail.com",
                    "Created"=> "2021-12-30T15:38:15.043",
                    "Status"=> "Active",
                    "Links"=> []
                ]
        ];

        $countArr = [];
        $dataArr = [];
        foreach ($items as $key => $item) {
            $ActionDate = date('Y-m-d', strtotime($item['ActionDate']));
            if(!isset($countArr[$ActionDate])){
                $countArr[$ActionDate] = 1;
            }else{
                $countArr[$ActionDate]++;
            }

            $dataArr[$ActionDate]['tag_id'] = 1;
            $dataArr[$ActionDate]['stats_date'] = $ActionDate;
            $dataArr[$ActionDate]['delivered'] = $countArr[$ActionDate];
            $dataArr[$ActionDate]['opened'] = $countArr[$ActionDate];
            $dataArr[$ActionDate]['clicked'] = $countArr[$ActionDate];
            $dataArr[$ActionDate]['complained'] = $countArr[$ActionDate];
            $dataArr[$ActionDate]['soft_bounce'] = $countArr[$ActionDate];
            $dataArr[$ActionDate]['hard_bounce'] = $countArr[$ActionDate];
        }

        // echo "<pre>";
        // print_r($dataArr);
        // die;

        return view('welcome');
    }
}
