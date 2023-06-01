<?php
/**
 * This file is part of the drobotik/http-status.
 * @author    Aleksandr Drobotik <drobotiksbox@gmail.com>
 * @copyright 2023 Aleksandr Drobotik
 * @license   https://opensource.org/license/mit  The MIT License
 */
declare(strict_types=1);

use Drobotik\HttpStatus\HttpStatusException;
use PHPUnit\Framework\TestCase;
use Drobotik\HttpStatus\HTTP_STATUS;

class HttpStatusTest extends TestCase
{
    /**
     * @test
     * @covers \Drobotik\HttpStatus\HTTP_STATUS::code
     */
    public function code()
    {
        $this->assertEquals(100, HTTP_STATUS::CONTINUE->code());
        $this->assertEquals(101, HTTP_STATUS::SWITCHING_PROTOCOLS->code());

        $this->assertEquals(200, HTTP_STATUS::OK->code());
        $this->assertEquals(201, HTTP_STATUS::CREATED->code());
        $this->assertEquals(202, HTTP_STATUS::ACCEPTED->code());
        $this->assertEquals(203, HTTP_STATUS::NON_AUTHORITATIVE_INFORMATION->code());
        $this->assertEquals(204, HTTP_STATUS::NO_CONTENT->code());
        $this->assertEquals(205, HTTP_STATUS::RESET_CONTENT->code());
        $this->assertEquals(206, HTTP_STATUS::PARTIAL_CONTENT->code());
        $this->assertEquals(207, HTTP_STATUS::MULTI_STATUS->code());
        $this->assertEquals(208, HTTP_STATUS::ALREADY_REPORTED->code());
        $this->assertEquals(226, HTTP_STATUS::IM_USED->code());

        $this->assertEquals(300, HTTP_STATUS::MULTIPLE_CHOICES->code());
        $this->assertEquals(301, HTTP_STATUS::MOVED_PERMANENTLY->code());
        $this->assertEquals(302, HTTP_STATUS::FOUND->code());
        $this->assertEquals(303, HTTP_STATUS::SEE_OTHER->code());
        $this->assertEquals(304, HTTP_STATUS::NOT_MODIFIED->code());
        $this->assertEquals(305, HTTP_STATUS::USE_PROXY->code());
        $this->assertEquals(306, HTTP_STATUS::UNUSED->code());
        $this->assertEquals(307, HTTP_STATUS::TEMPORARY_REDIRECT->code());
        $this->assertEquals(308, HTTP_STATUS::PERMANENT_REDIRECT->code());

        $this->assertEquals(400, HTTP_STATUS::BAD_REQUEST->code());
        $this->assertEquals(401, HTTP_STATUS::UNAUTHORIZED->code());
        $this->assertEquals(402, HTTP_STATUS::PAYMENT_REQUIRED->code());
        $this->assertEquals(403, HTTP_STATUS::FORBIDDEN->code());
        $this->assertEquals(404, HTTP_STATUS::NOT_FOUND->code());
        $this->assertEquals(405, HTTP_STATUS::METHOD_NOT_ALLOWED->code());
        $this->assertEquals(406, HTTP_STATUS::NOT_ACCEPTABLE->code());
        $this->assertEquals(407, HTTP_STATUS::PROXY_AUTHENTICATION_REQUIRED->code());
        $this->assertEquals(408, HTTP_STATUS::REQUEST_TIMEOUT->code());
        $this->assertEquals(409, HTTP_STATUS::CONFLICT->code());
        $this->assertEquals(410, HTTP_STATUS::GONE->code());
        $this->assertEquals(411, HTTP_STATUS::LENGTH_REQUIRED->code());
        $this->assertEquals(412, HTTP_STATUS::PRECONDITION_FAILED->code());
        $this->assertEquals(413, HTTP_STATUS::PAYLOAD_TOO_LARGE->code());
        $this->assertEquals(414, HTTP_STATUS::URI_TOO_LONG->code());
        $this->assertEquals(415, HTTP_STATUS::UNSUPPORTED_MEDIA_TYPE->code());
        $this->assertEquals(416, HTTP_STATUS::RANGE_NOT_SATISFIABLE->code());
        $this->assertEquals(417, HTTP_STATUS::EXPECTATION_FAILED->code());
        $this->assertEquals(418, HTTP_STATUS::IM_A_TEAPOT->code());
        $this->assertEquals(421, HTTP_STATUS::MISDIRECTED_REQUEST->code());
        $this->assertEquals(422, HTTP_STATUS::UNPROCESSABLE_ENTITY->code());
        $this->assertEquals(423, HTTP_STATUS::LOCKED->code());
        $this->assertEquals(424, HTTP_STATUS::FAILED_DEPENDENCY->code());
        $this->assertEquals(425, HTTP_STATUS::TOO_EARLY->code());
        $this->assertEquals(426, HTTP_STATUS::UPGRADE_REQUIRED->code());
        $this->assertEquals(428, HTTP_STATUS::PRECONDITION_REQUIRED->code());
        $this->assertEquals(429, HTTP_STATUS::TOO_MANY_REQUESTS->code());
        $this->assertEquals(431, HTTP_STATUS::REQUEST_HEADER_FIELDS_TOO_LARGE->code());
        $this->assertEquals(451, HTTP_STATUS::UNAVAILABLE_FOR_LEGAL_REASONS->code());

        $this->assertEquals(500, HTTP_STATUS::INTERNAL_SERVER_ERROR->code());
        $this->assertEquals(501, HTTP_STATUS::NOT_IMPLEMENTED->code());
        $this->assertEquals(502, HTTP_STATUS::BAD_GATEWAY->code());
        $this->assertEquals(503, HTTP_STATUS::SERVICE_UNAVAILABLE->code());
        $this->assertEquals(504, HTTP_STATUS::GATEWAY_TIMEOUT->code());
        $this->assertEquals(505, HTTP_STATUS::HTTP_VERSION_NOT_SUPPORTED->code());
        $this->assertEquals(506, HTTP_STATUS::VARIANT_ALSO_NEGOTIATES->code());
        $this->assertEquals(507, HTTP_STATUS::INSUFFICIENT_STORAGE->code());
        $this->assertEquals(508, HTTP_STATUS::LOOP_DETECTED->code());
        $this->assertEquals(510, HTTP_STATUS::NOT_EXTENDED->code());
        $this->assertEquals(511, HTTP_STATUS::NETWORK_AUTHENTICATION_REQUIRED->code());
    }

    /**
     * @test
     * @covers \Drobotik\HttpStatus\HTTP_STATUS::message
     */
    public function message()
    {
        $this->assertEquals("Continue", HTTP_STATUS::CONTINUE->message());
        $this->assertEquals("Switching Protocols", HTTP_STATUS::SWITCHING_PROTOCOLS->message());
        $this->assertEquals("OK", HTTP_STATUS::OK->message());
        $this->assertEquals("Created", HTTP_STATUS::CREATED->message());
        $this->assertEquals("Accepted", HTTP_STATUS::ACCEPTED->message());
        $this->assertEquals("Non-Authoritative Information", HTTP_STATUS::NON_AUTHORITATIVE_INFORMATION->message());
        $this->assertEquals("No Content", HTTP_STATUS::NO_CONTENT->message());
        $this->assertEquals("Reset Content", HTTP_STATUS::RESET_CONTENT->message());
        $this->assertEquals("Partial Content", HTTP_STATUS::PARTIAL_CONTENT->message());
        $this->assertEquals("Multi-Status", HTTP_STATUS::MULTI_STATUS->message());
        $this->assertEquals("Already Reported", HTTP_STATUS::ALREADY_REPORTED->message());
        $this->assertEquals("IM Used", HTTP_STATUS::IM_USED->message());
        $this->assertEquals("Multiple Choices", HTTP_STATUS::MULTIPLE_CHOICES->message());
        $this->assertEquals("Moved Permanently", HTTP_STATUS::MOVED_PERMANENTLY->message());
        $this->assertEquals("Found", HTTP_STATUS::FOUND->message());
        $this->assertEquals("See Other", HTTP_STATUS::SEE_OTHER->message());
        $this->assertEquals("Not Modified", HTTP_STATUS::NOT_MODIFIED->message());
        $this->assertEquals("Use Proxy", HTTP_STATUS::USE_PROXY->message());
        $this->assertEquals("Unused", HTTP_STATUS::UNUSED->message());
        $this->assertEquals("Temporary Redirect", HTTP_STATUS::TEMPORARY_REDIRECT->message());
        $this->assertEquals("Permanent Redirect", HTTP_STATUS::PERMANENT_REDIRECT->message());
        $this->assertEquals("Bad Request", HTTP_STATUS::BAD_REQUEST->message());
        $this->assertEquals("Unauthorized", HTTP_STATUS::UNAUTHORIZED->message());
        $this->assertEquals("Payment Required", HTTP_STATUS::PAYMENT_REQUIRED->message());
        $this->assertEquals("Forbidden", HTTP_STATUS::FORBIDDEN->message());
        $this->assertEquals("Not Found", HTTP_STATUS::NOT_FOUND->message());
        $this->assertEquals("Method Not Allowed", HTTP_STATUS::METHOD_NOT_ALLOWED->message());
        $this->assertEquals("Not Acceptable", HTTP_STATUS::NOT_ACCEPTABLE->message());
        $this->assertEquals("Proxy Authentication Required", HTTP_STATUS::PROXY_AUTHENTICATION_REQUIRED->message());
        $this->assertEquals("Request Timeout", HTTP_STATUS::REQUEST_TIMEOUT->message());
        $this->assertEquals("Conflict", HTTP_STATUS::CONFLICT->message());
        $this->assertEquals("Gone", HTTP_STATUS::GONE->message());
        $this->assertEquals("Length Required", HTTP_STATUS::LENGTH_REQUIRED->message());
        $this->assertEquals("Precondition Failed", HTTP_STATUS::PRECONDITION_FAILED->message());
        $this->assertEquals("Payload Too Large", HTTP_STATUS::PAYLOAD_TOO_LARGE->message());
        $this->assertEquals("URI Too Long", HTTP_STATUS::URI_TOO_LONG->message());
        $this->assertEquals("Unsupported Media Type", HTTP_STATUS::UNSUPPORTED_MEDIA_TYPE->message());
        $this->assertEquals("Range Not Satisfiable", HTTP_STATUS::RANGE_NOT_SATISFIABLE->message());
        $this->assertEquals("Expectation Failed", HTTP_STATUS::EXPECTATION_FAILED->message());
        $this->assertEquals("I'm a teapot", HTTP_STATUS::IM_A_TEAPOT->message());
        $this->assertEquals("Misdirected Request", HTTP_STATUS::MISDIRECTED_REQUEST->message());
        $this->assertEquals("Unprocessable Entity", HTTP_STATUS::UNPROCESSABLE_ENTITY->message());
        $this->assertEquals("Locked", HTTP_STATUS::LOCKED->message());
        $this->assertEquals("Failed Dependency", HTTP_STATUS::FAILED_DEPENDENCY->message());
        $this->assertEquals("Too Early", HTTP_STATUS::TOO_EARLY->message());
        $this->assertEquals("Upgrade Required", HTTP_STATUS::UPGRADE_REQUIRED->message());
        $this->assertEquals("Precondition Required", HTTP_STATUS::PRECONDITION_REQUIRED->message());
        $this->assertEquals("Too Many Requests", HTTP_STATUS::TOO_MANY_REQUESTS->message());
        $this->assertEquals("Request Header Fields Too Large", HTTP_STATUS::REQUEST_HEADER_FIELDS_TOO_LARGE->message());
        $this->assertEquals("Unavailable For Legal Reasons", HTTP_STATUS::UNAVAILABLE_FOR_LEGAL_REASONS->message());
        $this->assertEquals("Internal Server Error", HTTP_STATUS::INTERNAL_SERVER_ERROR->message());
        $this->assertEquals("Not Implemented", HTTP_STATUS::NOT_IMPLEMENTED->message());
        $this->assertEquals("Bad Gateway", HTTP_STATUS::BAD_GATEWAY->message());
        $this->assertEquals("Service Unavailable", HTTP_STATUS::SERVICE_UNAVAILABLE->message());
        $this->assertEquals("Gateway Timeout", HTTP_STATUS::GATEWAY_TIMEOUT->message());
        $this->assertEquals("HTTP Version Not Supported", HTTP_STATUS::HTTP_VERSION_NOT_SUPPORTED->message());
        $this->assertEquals("Variant Also Negotiates", HTTP_STATUS::VARIANT_ALSO_NEGOTIATES->message());
        $this->assertEquals("Insufficient Storage", HTTP_STATUS::INSUFFICIENT_STORAGE->message());
        $this->assertEquals("Loop Detected", HTTP_STATUS::LOOP_DETECTED->message());
        $this->assertEquals("Not Extended", HTTP_STATUS::NOT_EXTENDED->message());
        $this->assertEquals("Network Authentication Required", HTTP_STATUS::NETWORK_AUTHENTICATION_REQUIRED->message());
    }

    /**
     * @test
     * @covers \Drobotik\HttpStatus\HTTP_STATUS::getCaseByCode
     */
    public function get_case_by_code()
    {
        $this->assertEquals(HTTP_STATUS::CONTINUE, HTTP_STATUS::getCaseByCode(100));
        $this->assertEquals(HTTP_STATUS::SWITCHING_PROTOCOLS, HTTP_STATUS::getCaseByCode(101));
        $this->assertEquals(HTTP_STATUS::OK, HTTP_STATUS::getCaseByCode(200));
        $this->assertEquals(HTTP_STATUS::CREATED, HTTP_STATUS::getCaseByCode(201));
        $this->assertEquals(HTTP_STATUS::ACCEPTED, HTTP_STATUS::getCaseByCode(202));
        $this->assertEquals(HTTP_STATUS::NON_AUTHORITATIVE_INFORMATION, HTTP_STATUS::getCaseByCode(203));
        $this->assertEquals(HTTP_STATUS::NO_CONTENT, HTTP_STATUS::getCaseByCode(204));
        $this->assertEquals(HTTP_STATUS::RESET_CONTENT, HTTP_STATUS::getCaseByCode(205));
        $this->assertEquals(HTTP_STATUS::PARTIAL_CONTENT, HTTP_STATUS::getCaseByCode(206));
        $this->assertEquals(HTTP_STATUS::MULTI_STATUS, HTTP_STATUS::getCaseByCode(207));
        $this->assertEquals(HTTP_STATUS::ALREADY_REPORTED, HTTP_STATUS::getCaseByCode(208));
        $this->assertEquals(HTTP_STATUS::IM_USED, HTTP_STATUS::getCaseByCode(226));
        $this->assertEquals(HTTP_STATUS::MULTIPLE_CHOICES, HTTP_STATUS::getCaseByCode(300));
        $this->assertEquals(HTTP_STATUS::MOVED_PERMANENTLY, HTTP_STATUS::getCaseByCode(301));
        $this->assertEquals(HTTP_STATUS::FOUND, HTTP_STATUS::getCaseByCode(302));
        $this->assertEquals(HTTP_STATUS::SEE_OTHER, HTTP_STATUS::getCaseByCode(303));
        $this->assertEquals(HTTP_STATUS::NOT_MODIFIED, HTTP_STATUS::getCaseByCode(304));
        $this->assertEquals(HTTP_STATUS::USE_PROXY, HTTP_STATUS::getCaseByCode(305));
        $this->assertEquals(HTTP_STATUS::UNUSED, HTTP_STATUS::getCaseByCode(306));
        $this->assertEquals(HTTP_STATUS::TEMPORARY_REDIRECT, HTTP_STATUS::getCaseByCode(307));
        $this->assertEquals(HTTP_STATUS::PERMANENT_REDIRECT, HTTP_STATUS::getCaseByCode(308));
        $this->assertEquals(HTTP_STATUS::BAD_REQUEST, HTTP_STATUS::getCaseByCode(400));
        $this->assertEquals(HTTP_STATUS::UNAUTHORIZED, HTTP_STATUS::getCaseByCode(401));
        $this->assertEquals(HTTP_STATUS::PAYMENT_REQUIRED, HTTP_STATUS::getCaseByCode(402));
        $this->assertEquals(HTTP_STATUS::FORBIDDEN, HTTP_STATUS::getCaseByCode(403));
        $this->assertEquals(HTTP_STATUS::NOT_FOUND, HTTP_STATUS::getCaseByCode(404));
        $this->assertEquals(HTTP_STATUS::METHOD_NOT_ALLOWED, HTTP_STATUS::getCaseByCode(405));
        $this->assertEquals(HTTP_STATUS::NOT_ACCEPTABLE, HTTP_STATUS::getCaseByCode(406));
        $this->assertEquals(HTTP_STATUS::PROXY_AUTHENTICATION_REQUIRED, HTTP_STATUS::getCaseByCode(407));
        $this->assertEquals(HTTP_STATUS::REQUEST_TIMEOUT, HTTP_STATUS::getCaseByCode(408));
        $this->assertEquals(HTTP_STATUS::CONFLICT, HTTP_STATUS::getCaseByCode(409));
        $this->assertEquals(HTTP_STATUS::GONE, HTTP_STATUS::getCaseByCode(410));
        $this->assertEquals(HTTP_STATUS::LENGTH_REQUIRED, HTTP_STATUS::getCaseByCode(411));
        $this->assertEquals(HTTP_STATUS::PRECONDITION_FAILED, HTTP_STATUS::getCaseByCode(412));
        $this->assertEquals(HTTP_STATUS::PAYLOAD_TOO_LARGE, HTTP_STATUS::getCaseByCode(413));
        $this->assertEquals(HTTP_STATUS::URI_TOO_LONG, HTTP_STATUS::getCaseByCode(414));
        $this->assertEquals(HTTP_STATUS::UNSUPPORTED_MEDIA_TYPE, HTTP_STATUS::getCaseByCode(415));
        $this->assertEquals(HTTP_STATUS::RANGE_NOT_SATISFIABLE, HTTP_STATUS::getCaseByCode(416));
        $this->assertEquals(HTTP_STATUS::EXPECTATION_FAILED, HTTP_STATUS::getCaseByCode(417));
        $this->assertEquals(HTTP_STATUS::IM_A_TEAPOT, HTTP_STATUS::getCaseByCode(418));
        $this->assertEquals(HTTP_STATUS::MISDIRECTED_REQUEST, HTTP_STATUS::getCaseByCode(421));
        $this->assertEquals(HTTP_STATUS::UNPROCESSABLE_ENTITY, HTTP_STATUS::getCaseByCode(422));
        $this->assertEquals(HTTP_STATUS::LOCKED, HTTP_STATUS::getCaseByCode(423));
        $this->assertEquals(HTTP_STATUS::FAILED_DEPENDENCY, HTTP_STATUS::getCaseByCode(424));
        $this->assertEquals(HTTP_STATUS::TOO_EARLY, HTTP_STATUS::getCaseByCode(425));
        $this->assertEquals(HTTP_STATUS::UPGRADE_REQUIRED, HTTP_STATUS::getCaseByCode(426));
        $this->assertEquals(HTTP_STATUS::PRECONDITION_REQUIRED, HTTP_STATUS::getCaseByCode(428));
        $this->assertEquals(HTTP_STATUS::TOO_MANY_REQUESTS, HTTP_STATUS::getCaseByCode(429));
        $this->assertEquals(HTTP_STATUS::REQUEST_HEADER_FIELDS_TOO_LARGE, HTTP_STATUS::getCaseByCode(431));
        $this->assertEquals(HTTP_STATUS::UNAVAILABLE_FOR_LEGAL_REASONS, HTTP_STATUS::getCaseByCode(451));
        $this->assertEquals(HTTP_STATUS::INTERNAL_SERVER_ERROR, HTTP_STATUS::getCaseByCode(500));
        $this->assertEquals(HTTP_STATUS::NOT_IMPLEMENTED, HTTP_STATUS::getCaseByCode(501));
        $this->assertEquals(HTTP_STATUS::BAD_GATEWAY, HTTP_STATUS::getCaseByCode(502));
        $this->assertEquals(HTTP_STATUS::SERVICE_UNAVAILABLE, HTTP_STATUS::getCaseByCode(503));
        $this->assertEquals(HTTP_STATUS::GATEWAY_TIMEOUT, HTTP_STATUS::getCaseByCode(504));
        $this->assertEquals(HTTP_STATUS::HTTP_VERSION_NOT_SUPPORTED, HTTP_STATUS::getCaseByCode(505));
        $this->assertEquals(HTTP_STATUS::VARIANT_ALSO_NEGOTIATES, HTTP_STATUS::getCaseByCode(506));
        $this->assertEquals(HTTP_STATUS::INSUFFICIENT_STORAGE, HTTP_STATUS::getCaseByCode(507));
        $this->assertEquals(HTTP_STATUS::LOOP_DETECTED, HTTP_STATUS::getCaseByCode(508));
        $this->assertEquals(HTTP_STATUS::NOT_EXTENDED, HTTP_STATUS::getCaseByCode(510));
        $this->assertEquals(HTTP_STATUS::NETWORK_AUTHENTICATION_REQUIRED, HTTP_STATUS::getCaseByCode(511));
    }

    /**
     * @test
     * @covers \Drobotik\HttpStatus\HttpStatusException::unsupportedStatus
     */
    public function unsupported_status_exception()
    {
        $this->expectException(HttpStatusException::class);
        $this->expectExceptionMessage(HttpStatusException::UNSUPPORTED_STATUS);
        HttpStatusException::unsupportedStatus();
    }

    /**
     * @test
     * @covers \Drobotik\HttpStatus\HTTP_STATUS::getCaseByCode
     */
    public function find_case_wrong_code()
    {
        $this->expectException(HttpStatusException::class);
        $this->expectExceptionMessage(HttpStatusException::UNSUPPORTED_STATUS);
        HTTP_STATUS::getCaseByCode(1000);
    }
}