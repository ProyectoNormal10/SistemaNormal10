<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use BackendBundle\Entity\Usuario;
use AppBundle\Services\Helpers;
use AppBundle\Services\JwtAuth;


class UserController extends Controller {
	
	public function newAction(Request $request){
		$helpers = $this->get(Helpers::class);

		$json = $request->get("json", null);
		$params = json_decode($json);
		
		$data = array(
			'status' => 'error',
			'code' => '500',
			'msg' => 'Usuario no creado'
			);
		if ($json != null) {
			$createdAt = new \Datetime("now");
			$role = 'admin';
			$email = (isset($params->email)) ? $params->email : null;
			$password = (isset($params->password)) ? $params->password : null;

			$emailConstraint = new Assert\Email();
			$emailConstraint->message = "El email no es valido";
			$validate_email = $this->get("validator")->validate($email, $emailConstraint);

			if ($email != null && count($validate_email) == 0 && $password != null && $name != null && $surname != null ) {

				$user = new User();
				$user->setCreatedAt($createdAt);
				$user->setRole($role);
				$user->setEmail($email);
				$user->setName($name);
				$user->setSurname($surname);

				$pwd = hash('sha256', $password);
				$user->setPassword($pwd);
			
				$em = $this->getDoctrine()->getManager();
				$isset_user = $em->getRepository('BackendBundle:Usuario')->findBy(array(
					"email" => $email

				));
				if (count($isset_user) == 0) {
					$em->persist($user);
					$em->flush();
					$data = array(
					'status' => 'success',
					'code' => '200',
					'msg' => 'Nuevo Usuario creado',
					'user' => $user
					);

				}else{
					$data = array(
					'status' => 'error',
					'code' => '500',
					'msg' => 'Usuario no creado, duplicado'
					);
				}

			}

		}

		return $helpers->json($data);
	}
	
	public function editAction(Request $request){
		$helpers = $this->get(Helpers::class);
		$jwt_auth = $this->get(JwtAuth::class);
		$token = $request->get('authorization', null);
		$authCheck = $jwt_auth->CheckToken($token);

		if ($authCheck) {
				$em = $this->getDoctrine()->getManager();
				$identity = $jwt_auth->CheckToken($token, true);
				$user = $em->getRepository('BackendBundle:User')->findOneBy(array(
					'id' => $identity->sub
				));


				$json = $request->get("json", null);
				$params = json_decode($json);
				
				$data = array(
					'status' => 'error',
					'code' => '500',
					'msg' => 'Usuario no updateado'
					);
				if ($json != null) {
					//$createdAt = new \Datetime("now");
					$role = 'user';
					$email = (isset($params->email)) ? $params->email : null;
					$name = (isset($params->name)) ? $params->name : null;
					$surname = (isset($params->surname)) ? $params->surname : null;
					$password = (isset($params->password)) ? $params->password : null;

					$emailConstraint = new Assert\Email();
					$emailConstraint->message = "El email no es valido";
					$validate_email = $this->get("validator")->validate($email, $emailConstraint);

					if ($email != null && count($validate_email) == 0 && $name != null && $surname != null ) {

						//$user->setCreatedAt($createdAt);
						$user->setRole($role);
						$user->setEmail($email);
						$user->setName($name);
						$user->setSurname($surname);
						if ($password != null) {
							$pwd = hash('sha256', $password);
							$user->setPassword($pwd);
						}
						
						
						$isset_user = $em->getRepository('BackendBundle:User')->findBy(array(
							"email" => $email

						));
						if (count($isset_user) == 0 || $identity->email == $email) {
							$em->persist($user);
							$em->flush();
							$data = array(
							'status' => 'success',
							'code' => '200',
							'msg' => 'Nuevo Usuario updateado',
							'user' => $user
							);

						}else{
							$data = array(
							'status' => 'error',
							'code' => '500',
							'msg' => 'Usuario no updateado, duplicado'
							);
						}

					}

				}
		}else{
			$data = array(
				'status' => 'error',
				'code' => '500',
				'msg' => 'authorization not valid'
			);
		}


		

		return $helpers->json($data);
	}
}