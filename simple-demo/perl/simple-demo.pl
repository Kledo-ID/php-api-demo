#!/usr/bin/perl
# Kledo API Demo - Perl
# Jalankan: perl simple-demo.pl
# Jika LWP belum ada: cpan LWP::UserAgent JSON

use strict;
use warnings;
use LWP::UserAgent;
use JSON;

my $API_HOST = 'http://xxx.api.kledo.com/api/v1';
my $ACCESS_TOKEN = 'your_token_here';

my $ua = LWP::UserAgent->new;
my $res = $ua->get(
    "$API_HOST/finance/accounts?sort_by=name&order_by=asc&per_page=5",
    'Accept' => 'application/json',
    'Authorization' => "Bearer $ACCESS_TOKEN"
);

my $data = decode_json($res->content);
print JSON->new->pretty->encode($data);
