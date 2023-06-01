<?php
/**
 * This file is part of the drobotik/http-status.
 * @author    Aleksandr Drobotik <drobotiksbox@gmail.com>
 * @copyright 2023 Aleksandr Drobotik
 * @license   https://opensource.org/license/mit  The MIT License
 */
declare(strict_types=1);

namespace Drobotik\HttpStatus;

enum HTTP_STATUS
{
    case CONTINUE;
    case SWITCHING_PROTOCOLS;
    case PROCESSING;
    case EARLY_HINTS;
    case OK;
    case CREATED;
    case ACCEPTED;
    case NON_AUTHORITATIVE_INFORMATION;
    case NO_CONTENT;
    case RESET_CONTENT;
    case PARTIAL_CONTENT;
    case MULTI_STATUS;
    case ALREADY_REPORTED;
    case IM_USED;
    case MULTIPLE_CHOICES;
    case MOVED_PERMANENTLY;
    case FOUND;
    case SEE_OTHER;
    case NOT_MODIFIED;
    case USE_PROXY;
    case UNUSED;
    case TEMPORARY_REDIRECT;
    case PERMANENT_REDIRECT;
    case BAD_REQUEST;
    case UNAUTHORIZED;
    case PAYMENT_REQUIRED;
    case FORBIDDEN;
    case NOT_FOUND;
    case METHOD_NOT_ALLOWED;
    case NOT_ACCEPTABLE;
    case PROXY_AUTHENTICATION_REQUIRED;
    case REQUEST_TIMEOUT;
    case CONFLICT;
    case GONE;
    case LENGTH_REQUIRED;
    case PRECONDITION_FAILED;
    case PAYLOAD_TOO_LARGE;
    case URI_TOO_LONG;
    case UNSUPPORTED_MEDIA_TYPE;
    case RANGE_NOT_SATISFIABLE;
    case EXPECTATION_FAILED;
    case IM_A_TEAPOT;
    case MISDIRECTED_REQUEST;
    case UNPROCESSABLE_ENTITY;
    case LOCKED;
    case FAILED_DEPENDENCY;
    case TOO_EARLY;
    case UPGRADE_REQUIRED;
    case PRECONDITION_REQUIRED;
    case TOO_MANY_REQUESTS;
    case REQUEST_HEADER_FIELDS_TOO_LARGE;
    case UNAVAILABLE_FOR_LEGAL_REASONS;
    case INTERNAL_SERVER_ERROR;
    case NOT_IMPLEMENTED;
    case BAD_GATEWAY;
    case SERVICE_UNAVAILABLE;
    case GATEWAY_TIMEOUT;
    case HTTP_VERSION_NOT_SUPPORTED;
    case VARIANT_ALSO_NEGOTIATES;
    case INSUFFICIENT_STORAGE;
    case LOOP_DETECTED;
    case NOT_EXTENDED;
    case NETWORK_AUTHENTICATION_REQUIRED;

    public function code() : int
    {
        return match ($this)
        {
            self::CONTINUE => 100,
            self::SWITCHING_PROTOCOLS => 101,
            self::PROCESSING => 102,
            self::EARLY_HINTS => 103,
            self::OK => 200,
            self::CREATED => 201,
            self::ACCEPTED => 202,
            self::NON_AUTHORITATIVE_INFORMATION => 203,
            self::NO_CONTENT => 204,
            self::RESET_CONTENT => 205,
            self::PARTIAL_CONTENT => 206,
            self::MULTI_STATUS => 207,
            self::ALREADY_REPORTED => 208,
            self::IM_USED => 226,
            self::MULTIPLE_CHOICES => 300,
            self::MOVED_PERMANENTLY => 301,
            self::FOUND => 302,
            self::SEE_OTHER => 303,
            self::NOT_MODIFIED => 304,
            self::USE_PROXY => 305,
            self::UNUSED => 306,
            self::TEMPORARY_REDIRECT => 307,
            self::PERMANENT_REDIRECT => 308,
            self::BAD_REQUEST => 400,
            self::UNAUTHORIZED => 401,
            self::PAYMENT_REQUIRED => 402,
            self::FORBIDDEN => 403,
            self::NOT_FOUND => 404,
            self::METHOD_NOT_ALLOWED => 405,
            self::NOT_ACCEPTABLE => 406,
            self::PROXY_AUTHENTICATION_REQUIRED => 407,
            self::REQUEST_TIMEOUT => 408,
            self::CONFLICT => 409,
            self::GONE => 410,
            self::LENGTH_REQUIRED => 411,
            self::PRECONDITION_FAILED => 412,
            self::PAYLOAD_TOO_LARGE => 413,
            self::URI_TOO_LONG => 414,
            self::UNSUPPORTED_MEDIA_TYPE => 415,
            self::RANGE_NOT_SATISFIABLE => 416,
            self::EXPECTATION_FAILED => 417,
            self::IM_A_TEAPOT => 418,
            self::MISDIRECTED_REQUEST => 421,
            self::UNPROCESSABLE_ENTITY => 422,
            self::LOCKED => 423,
            self::FAILED_DEPENDENCY => 424,
            self::TOO_EARLY => 425,
            self::UPGRADE_REQUIRED => 426,
            self::PRECONDITION_REQUIRED => 428,
            self::TOO_MANY_REQUESTS => 429,
            self::REQUEST_HEADER_FIELDS_TOO_LARGE => 431,
            self::UNAVAILABLE_FOR_LEGAL_REASONS => 451,
            self::INTERNAL_SERVER_ERROR => 500,
            self::NOT_IMPLEMENTED => 501,
            self::BAD_GATEWAY => 502,
            self::SERVICE_UNAVAILABLE => 503,
            self::GATEWAY_TIMEOUT => 504,
            self::HTTP_VERSION_NOT_SUPPORTED => 505,
            self::VARIANT_ALSO_NEGOTIATES => 506,
            self::INSUFFICIENT_STORAGE => 507,
            self::LOOP_DETECTED => 508,
            self::NOT_EXTENDED => 510,
            self::NETWORK_AUTHENTICATION_REQUIRED => 511,

        };
    }

    public function message(): string
    {
        return match ($this)
        {
            self::CONTINUE => "Continue",
            self::SWITCHING_PROTOCOLS => "Switching Protocols",
            self::PROCESSING => "Processing",
            self::EARLY_HINTS => "Early Hints",
            self::OK => "OK",
            self::CREATED => "Created",
            self::ACCEPTED => "Accepted",
            self::NON_AUTHORITATIVE_INFORMATION => "Non-Authoritative Information",
            self::NO_CONTENT => "No Content",
            self::RESET_CONTENT => "Reset Content",
            self::PARTIAL_CONTENT => "Partial Content",
            self::MULTI_STATUS => "Multi-Status",
            self::ALREADY_REPORTED => "Already Reported",
            self::IM_USED => "IM Used",
            self::MULTIPLE_CHOICES => "Multiple Choices",
            self::MOVED_PERMANENTLY => "Moved Permanently",
            self::FOUND => "Found",
            self::SEE_OTHER => "See Other",
            self::NOT_MODIFIED => "Not Modified",
            self::USE_PROXY => "Use Proxy",
            self::UNUSED => "Unused",
            self::TEMPORARY_REDIRECT => "Temporary Redirect",
            self::PERMANENT_REDIRECT => "Permanent Redirect",
            self::BAD_REQUEST => "Bad Request",
            self::UNAUTHORIZED => "Unauthorized",
            self::PAYMENT_REQUIRED => "Payment Required",
            self::FORBIDDEN => "Forbidden",
            self::NOT_FOUND => "Not Found",
            self::METHOD_NOT_ALLOWED => "Method Not Allowed",
            self::NOT_ACCEPTABLE => "Not Acceptable",
            self::PROXY_AUTHENTICATION_REQUIRED => "Proxy Authentication Required",
            self::REQUEST_TIMEOUT => "Request Timeout",
            self::CONFLICT => "Conflict",
            self::GONE => "Gone",
            self::LENGTH_REQUIRED => "Length Required",
            self::PRECONDITION_FAILED => "Precondition Failed",
            self::PAYLOAD_TOO_LARGE => "Payload Too Large",
            self::URI_TOO_LONG => "URI Too Long",
            self::UNSUPPORTED_MEDIA_TYPE => "Unsupported Media Type",
            self::RANGE_NOT_SATISFIABLE => "Range Not Satisfiable",
            self::EXPECTATION_FAILED => "Expectation Failed",
            self::IM_A_TEAPOT => "I'm a teapot",
            self::MISDIRECTED_REQUEST => "Misdirected Request",
            self::UNPROCESSABLE_ENTITY => "Unprocessable Entity",
            self::LOCKED => "Locked",
            self::FAILED_DEPENDENCY => "Failed Dependency",
            self::TOO_EARLY => "Too Early",
            self::UPGRADE_REQUIRED => "Upgrade Required",
            self::PRECONDITION_REQUIRED => "Precondition Required",
            self::TOO_MANY_REQUESTS => "Too Many Requests",
            self::REQUEST_HEADER_FIELDS_TOO_LARGE => "Request Header Fields Too Large",
            self::UNAVAILABLE_FOR_LEGAL_REASONS => "Unavailable For Legal Reasons",
            self::INTERNAL_SERVER_ERROR => "Internal Server Error",
            self::NOT_IMPLEMENTED => "Not Implemented",
            self::BAD_GATEWAY => "Bad Gateway",
            self::SERVICE_UNAVAILABLE => "Service Unavailable",
            self::GATEWAY_TIMEOUT => "Gateway Timeout",
            self::HTTP_VERSION_NOT_SUPPORTED => "HTTP Version Not Supported",
            self::VARIANT_ALSO_NEGOTIATES => "Variant Also Negotiates",
            self::INSUFFICIENT_STORAGE => "Insufficient Storage",
            self::LOOP_DETECTED => "Loop Detected",
            self::NOT_EXTENDED => "Not Extended",
            self::NETWORK_AUTHENTICATION_REQUIRED => "Network Authentication Required",

        };
    }

    /**
     * @throws HttpStatusException
     */
    public static function getCaseByCode(int $code) : HTTP_STATUS
    {
        return match ($code)
        {
            self::CONTINUE->code() => self::CONTINUE,
            self::SWITCHING_PROTOCOLS->code() => self::SWITCHING_PROTOCOLS,
            self::PROCESSING->code() => self::PROCESSING,
            self::EARLY_HINTS->code() => self::EARLY_HINTS,
            self::OK->code() => self::OK,
            self::CREATED->code() => self::CREATED,
            self::ACCEPTED->code() => self::ACCEPTED,
            self::NON_AUTHORITATIVE_INFORMATION->code() => self::NON_AUTHORITATIVE_INFORMATION,
            self::NO_CONTENT->code() => self::NO_CONTENT,
            self::RESET_CONTENT->code() => self::RESET_CONTENT,
            self::PARTIAL_CONTENT->code() => self::PARTIAL_CONTENT,
            self::MULTI_STATUS->code() => self::MULTI_STATUS,
            self::ALREADY_REPORTED->code() => self::ALREADY_REPORTED,
            self::IM_USED->code() => self::IM_USED,
            self::MULTIPLE_CHOICES->code() => self::MULTIPLE_CHOICES,
            self::MOVED_PERMANENTLY->code() => self::MOVED_PERMANENTLY,
            self::FOUND->code() => self::FOUND,
            self::SEE_OTHER->code() => self::SEE_OTHER,
            self::NOT_MODIFIED->code() => self::NOT_MODIFIED,
            self::USE_PROXY->code() => self::USE_PROXY,
            self::UNUSED->code() => self::UNUSED,
            self::TEMPORARY_REDIRECT->code() => self::TEMPORARY_REDIRECT,
            self::PERMANENT_REDIRECT->code() => self::PERMANENT_REDIRECT,
            self::BAD_REQUEST->code() => self::BAD_REQUEST,
            self::UNAUTHORIZED->code() => self::UNAUTHORIZED,
            self::PAYMENT_REQUIRED->code() => self::PAYMENT_REQUIRED,
            self::FORBIDDEN->code() => self::FORBIDDEN,
            self::NOT_FOUND->code() => self::NOT_FOUND,
            self::METHOD_NOT_ALLOWED->code() => self::METHOD_NOT_ALLOWED,
            self::NOT_ACCEPTABLE->code() => self::NOT_ACCEPTABLE,
            self::PROXY_AUTHENTICATION_REQUIRED->code() => self::PROXY_AUTHENTICATION_REQUIRED,
            self::REQUEST_TIMEOUT->code() => self::REQUEST_TIMEOUT,
            self::CONFLICT->code() => self::CONFLICT,
            self::GONE->code() => self::GONE,
            self::LENGTH_REQUIRED->code() => self::LENGTH_REQUIRED,
            self::PRECONDITION_FAILED->code() => self::PRECONDITION_FAILED,
            self::PAYLOAD_TOO_LARGE->code() => self::PAYLOAD_TOO_LARGE,
            self::URI_TOO_LONG->code() => self::URI_TOO_LONG,
            self::UNSUPPORTED_MEDIA_TYPE->code() => self::UNSUPPORTED_MEDIA_TYPE,
            self::RANGE_NOT_SATISFIABLE->code() => self::RANGE_NOT_SATISFIABLE,
            self::EXPECTATION_FAILED->code() => self::EXPECTATION_FAILED,
            self::IM_A_TEAPOT->code() => self::IM_A_TEAPOT,
            self::MISDIRECTED_REQUEST->code() => self::MISDIRECTED_REQUEST,
            self::UNPROCESSABLE_ENTITY->code() => self::UNPROCESSABLE_ENTITY,
            self::LOCKED->code() => self::LOCKED,
            self::FAILED_DEPENDENCY->code() => self::FAILED_DEPENDENCY,
            self::TOO_EARLY->code() => self::TOO_EARLY,
            self::UPGRADE_REQUIRED->code() => self::UPGRADE_REQUIRED,
            self::PRECONDITION_REQUIRED->code() => self::PRECONDITION_REQUIRED,
            self::TOO_MANY_REQUESTS->code() => self::TOO_MANY_REQUESTS,
            self::REQUEST_HEADER_FIELDS_TOO_LARGE->code() => self::REQUEST_HEADER_FIELDS_TOO_LARGE,
            self::UNAVAILABLE_FOR_LEGAL_REASONS->code() => self::UNAVAILABLE_FOR_LEGAL_REASONS,
            self::INTERNAL_SERVER_ERROR->code() => self::INTERNAL_SERVER_ERROR,
            self::NOT_IMPLEMENTED->code() => self::NOT_IMPLEMENTED,
            self::BAD_GATEWAY->code() => self::BAD_GATEWAY,
            self::SERVICE_UNAVAILABLE->code() => self::SERVICE_UNAVAILABLE,
            self::GATEWAY_TIMEOUT->code() => self::GATEWAY_TIMEOUT,
            self::HTTP_VERSION_NOT_SUPPORTED->code() => self::HTTP_VERSION_NOT_SUPPORTED,
            self::VARIANT_ALSO_NEGOTIATES->code() => self::VARIANT_ALSO_NEGOTIATES,
            self::INSUFFICIENT_STORAGE->code() => self::INSUFFICIENT_STORAGE,
            self::LOOP_DETECTED->code() => self::LOOP_DETECTED,
            self::NOT_EXTENDED->code() => self::NOT_EXTENDED,
            self::NETWORK_AUTHENTICATION_REQUIRED->code() => self::NETWORK_AUTHENTICATION_REQUIRED,
            default => HttpStatusException::unsupportedStatus()
        };
    }
}