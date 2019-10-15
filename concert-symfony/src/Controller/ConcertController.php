<?php
/**
 * Created by PhpStorm.
 * User: yensdefraeye
 * Date: 06/10/2019
 * Time: 16:40
 */

namespace App\Controller;

use App\Entity\Concerts;

use App\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ConcertController extends AbstractController
{
    /**
      * @Route("/", name="index")
    */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Concerts::class);
        $concerts = $repository->findAll();

        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        //$user = $this->getUser();
        //dd($user);

        return $this->render('concerts.html.twig', [
            'concerts' => $concerts
        ]);
    }

    /**
     * @Route("/switch", name="switch")
     */
    public function switchFav()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository(Concerts::class);
        $request = Request::createFromGlobals();
        $id = $request->get('event_id');
        $concert = $repository->find($id);

        //update fav
        $concert->setFav(!$concert->getFav());
        $entityManager->flush();

        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/search", name="search")
     */
    public function search()
    {
        $request = Request::createFromGlobals();
        $search = $request->get('search');

        //$concerts = $this->getDoctrine()
          //  ->getRepository(Concerts::class)
            //->search($search);

        $concerts = $this->getDoctrine()->getManager()->getRepository(Concerts::class)->createQueryBuilder('o')
            ->Where('o.title LIKE :search')
            ->setParameter('search', '%' . $search . '%')
            ->getQuery()
            ->getResult();

        return $this->render('concerts.html.twig', [
            'concerts' => $concerts
        ]);

    }

    /**
     * @Route("/concert/{id}", name="concert")
     */
    public function concert_detail(int $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository(Concerts::class);
        $concert = $repository->find($id);

        $images = $this->getDoctrine()->getManager()->getRepository(Image::class)->createQueryBuilder('o')
            ->where('o.concert_id = :id')
            ->setParameter('id', $concert->getId())
            ->getQuery()
            ->getResult();

        return $this->render('concert_detail.html.twig', [
            'concert' => $concert,
            'images' => $images
        ]);
    }

    /**
     * @Route("/concert/{conc_id}/image/{img_id}", name="image")
     */
    public function concert_image(int $conc_id, int $img_id)
    {
        $concert = $this->getDoctrine()->getManager()->getRepository(Concerts::class)->find($conc_id);
        $image = $this->getDoctrine()->getManager()->getRepository(Image::class)->find($img_id);

        return $this->render('concert_image.html.twig', [
            'concert' => $concert,
            'image' => $image
        ]);
    }
}