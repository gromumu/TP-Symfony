<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TPTemplatesController extends AbstractController
{
    /**
     * @Route("/tptemplates",
     * name="tptemplateshome",
     * )
     */
    public function index()
    {

        $announcementsHome = [
            ["id"=>1,
                "title"=>"annonce 1",
                "content"=>"content 1",
                "price"=>12,
                "created Date"=>new\DateTime()
            ],
            ["id"=>2,
                "title"=>"annonce 2",
                "content"=>"content 2",
                "price"=>13,
                "created Date"=>new\DateTime()
            ]
        ];

        $announcementsList = [
            ["id"=>1,
                "title"=>"annonce 1",
                "content"=>"content 1",
                "price"=>12,
                "created Date"=>new\DateTime()
            ],
            ["id"=>2,
                "title"=>"annonce 2",
                "content"=>"content 2",
                "price"=>13,
                "created Date"=>new\DateTime()
            ],
            ["id"=>3,
                "title"=>"annonce 3",
                "content"=>"content 3",
                "price"=>22,
                "created Date"=>new\DateTime()
            ],
            ["id"=>4,
                "title"=>"annonce 4",
                "content"=>"content 4",
                "price"=>120,
                "created Date"=>new\DateTime()
            ],
            ["id"=>5,
                "title"=>"annonce 5",
                "content"=>"content 5",
                "price"=>72,
                "created Date"=>new\DateTime()
            ],
            ["id"=>6,
                "title"=>"annonce 6",
                "content"=>"content 6",
                "price"=>62,
                "created Date"=>new\DateTime()
            ],
            ["id"=>7,
                "title"=>"annonce 7",
                "content"=>"content 7",
                "price"=>902,
                "created Date"=>new\DateTime()
            ],
            ["id"=>8,
                "title"=>"annonce 8",
                "content"=>"content 8",
                "price"=>452,
                "created Date"=>new\DateTime()
            ],
            ["id"=>9,
                "title"=>"annonce 9",
                "content"=>"content 9",
                "price"=>402,
                "created Date"=>new\DateTime()
            ],
            ["id"=>10,
                "title"=>"annonce 10",
                "content"=>"content 10",
                "price"=>12,
                "created Date"=>new\DateTime()
            ],
        ];

        return $this->render('tp_templates/index.html.twig', [
            'controller_name' => 'TPTemplatesController',
            'announcementsHome' => $announcementsHome,
            'announcementsList' => $announcementsList,
        ]);
    }
}
