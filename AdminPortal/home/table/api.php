<?php
include 'myUser.php';
class API
{
    private $requestMethod;
    private $tablenumber;
    private $myuser;

    public function __construct($requestMethod, $tablenumber)
    {
        $this->requestMethod = $requestMethod;
        $this->tablenumber = $tablenumber;
        $this->myuser = new myUser();
    }

    public function processRequest($mypost_arr=[])
    {
        $response = "Executed succesfuly";
        switch ($this->requestMethod) {
            case 'GET':
                if ($this->tablenumber) {
                    $response = $this->getUser($this->tablenumber);
                } else {
                    $response = $this->getAllUsers();
                };
                break;
            case 'POST':
				if(!empty($mypost_arr))
				{
					$response = $this->createUserFromRequest($mypost_arr);
				}
				else
				{
					$response = $this->unprocessableEntityResponse();
				}
                break;
            case 'PUT':
				if(!empty($mypost_arr))
				{
					$response = $this->updateUserFromRequest($this->tablenumber,$mypost_arr);
				}
				else
				{
					$response = $this->unprocessableEntityResponse();
				}
                break;
            case 'DELETE':
                $response = $this->deleteUser($this->tablenumber);
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }

        return $response;
    }

    private function getAllUsers()
    {
        $result = $this->myuser->read();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function getUser($id)
    {
        $result = $this->myuser->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function createUserFromRequest(array $post_arr)
    {
        $input = $post_arr;
    
        $this->myuser->insert($input['table_number'],$input['table_cost'],$input['number_of_seats']);
        $response['status_code_header'] = 'HTTP/1.1 201 Created';
        $response['body'] = TRUE;
        return $response;
    }

    private function updateUserFromRequest($id,array $post_arr)
    {
        $result = $this->myuser->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $input = $post_arr;
        $this->myuser->update($id, $input);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = TRUE;
        return $response;
    }

    private function deleteUser($id)
    {
        $result = $this->myuser->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $this->myuser->remove($id);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = TRUE;
        return $response;
    }



    private function unprocessableEntityResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';
        $response['body'] = json_encode([
            'error' => 'Invalid input'
        ]);
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }
}


?>