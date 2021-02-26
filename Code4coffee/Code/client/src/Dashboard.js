import Button from 'react-bootstrap/Button';
import './dashboard.css';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Card from 'react-bootstrap/Card';
import Form from 'react-bootstrap/Form';
import React, { Component } from 'react';
import Navbar from 'react-bootstrap/Navbar';


export default class Dashboard extends Component{
    
    state={
        value:'',
        show:''
     }

handleChange=(e)=>{
 this.setState({value:e.target.value})
}


FetchVal=()=>{
    const wal_ad = this.state.value;
    alert(wal_ad)

    var request = require('request');

    request('https://api.smartbit.com.au/v1/blockchain/address/'+wal_ad, function (error, response, body) {
    console.log('Response:', body);
    });

  }

  render() {

        return (
        <div className="Dashboard">
         

            <div className="DashCenterCard">
            <Container>
                <Row>
                    <Col md={3} lg={4}>
                    </Col>
                    <Col xs={12} md={6} lg={4}>
        <Card className="DashbalCard" style={{ width: '100%' }}>
        <Card.Body>
            <h4 className="Head text-center">Balance</h4>
            <hr/>
            <h3 className="bold text-center">200 USD</h3>
        </Card.Body>
        </Card>
                   

        <Card className="DashformCard" style={{ width: '100%' }}>
        <Card.Body>

        <h3 className="Head">Send Bitcoin</h3>
                        <hr/>
                        <br/>
                        
       
                            <Form onSubmit={this.FetchVal}>
                            <Form.Group controlId="formBasicEmail">
                                <Form.Label>Wallet address</Form.Label>
                                <Form.Control type="text" value={this.state.value} onChange={this.handleChange}  placeholder="Enter receiver's wallet address" required/>
                            
                            </Form.Group>

                            <Form.Group controlId="formBasicPassword">
                                <Form.Label>Amount</Form.Label>
                                <Form.Control  type="number" min="10" placeholder="Enter amount in USD" required/>
                            </Form.Group>
                            <br/>
                            <div  className="text-center">
                                <Button onClick={this.FetchVal} variant="dark" type="submit">
                                    Submit
                                </Button>
                            </div>
                            </Form>  
                            
                            

            
           
        </Card.Body>
        </Card>

                    </Col>
                    <Col md={3} lg={4}>
                    </Col>
                </Row>
          </Container>

            </div>
            
      
                  
        </div>
    )
}

}