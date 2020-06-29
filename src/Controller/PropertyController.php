<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

	/**
	 * @Route("/biens", name="property.index")
	 * @return Response
	 */
	public function index(): Response
	{
		return $this->render('property/index.html.twig', [
			'current_menu' => 'properties'
		]);
	}

	/**
	* @var PropertyRepository
	*/
	private $repository;

	public function __construct(PropertyRepository $repository, EntityManagerInterface $em)
	{
		$this->repository = $repository;
		$this->em = $em;
	}


	/**
	 * @Route("/biens/{id}", name="property.show", requirements={"slug"= "[a-z0-9\-]*"})
	 * @param Property $property
	 * @return Response
	 */
	public function show(Property $property, $id): Response
	{	
		return $this->render('property/show.html.twig', [
				'property' => $property,
				'current_menu' => 'properties'
			]);
	}




















}