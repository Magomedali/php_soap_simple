<?php 
header("Content-type: text/xml; charset=UTF-8");

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
?>
<definitions 
	xmlns="http://schemas.xmlsoap.org/wsdl/" 
	xmlns:tns="http://localhost:8082/test/soap/server.php" 
	xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" 
	xmlns:xsd="http://www.w3.org/2001/XMLSchema" 
	xmlns:soap-enc="http://schemas.xmlsoap.org/soap/encoding/" 
	xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" 
	name="api.soap.controllers.ApiController" 
	targetNamespace="http://localhost:8082/test/soap/server.php">
	<types>
		<xsd:schema targetNamespace="http://localhost:8082/test/soap/server.php">
			<xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/"/>
		</xsd:schema>
	</types>

	<message name="sayIn">
		<part name="msg" type="xsd:string"/>
	</message>
	<message name="sayOut">
		<part name="return" type="xsd:string"/>
	</message>

	<portType name="api.soap.controllers.ApiControllerPort">
		<operation name="say">
			<input message="tns:sayIn"/>
			<output message="tns:sayOut"/>
		</operation>
	</portType>
	<binding name="api.soap.controllers.ApiControllerBinding" type="tns:api.soap.controllers.ApiControllerPort">
		<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
		<operation name="say">
			<soap:operation soapAction="http://localhost:8082/test/soap/server.php#say"/>
			<input>
				<soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://localhost:8082/test/soap/server.php"/>
			</input>
			<output>
				<soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://localhost:8082/test/soap/server.php"/>
			</output>
		</operation>
	</binding>
	<service name="api.soap.controllers.ApiControllerService">
		<port name="api.soap.controllers.ApiControllerPort" binding="tns:api.soap.controllers.ApiControllerBinding">
			<soap:address location="http://lk.web-ali.ru/soap/server.php"/>
		</port>
	</service>
</definitions>