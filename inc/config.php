<?php

namespace MOS\Birdsend;

define( 'CB_INS_SECRET', 'ANTOLAMAS61952' );

// Birdsend URL Endpoints
define( 'BASE_URL_CONTACTS', 'https://api.birdsend.co/v1/contacts' );
define( 'BASE_URL_TEST', 'https://fa9438717d678d74b5cb20e6e5b41923.m.pipedream.net' );

// Headers to be sent to Birdsend API
define( 'HEADER_AUTH', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjRlNGJlYjQxOGE5N2U2NjMzMzNlYTQyYWUxOWM2NzQzNzE4Yjk1OTVjM2JiNzYxYThiM2UzY2ZiYmQwOGRjOTg0NWQyZjE5OGMyNmUzZDEwIn0.eyJhdWQiOiI1IiwianRpIjoiNGU0YmViNDE4YTk3ZTY2MzMzM2VhNDJhZTE5YzY3NDM3MThiOTU5NWMzYmI3NjFhOGIzZTNjZmJiZDA4ZGM5ODQ1ZDJmMTk4YzI2ZTNkMTAiLCJpYXQiOjE2MDI2MjI5NTAsIm5iZiI6MTYwMjYyMjk1MCwiZXhwIjoxNjM0MTU4OTUwLCJzdWIiOiI1NjciLCJzY29wZXMiOlsid3JpdGUiXX0.prudJcMDvLBNKlCLkS1DFUseMAW3K8JJHtA2vxVs1hKjUAWl6iaml_EYud6LeXv-N4ZYl5fN69LHpX_R9XTywD84wUOePmbebp5PZPYJ8d62gdJhxVjySmPd6qAy7rWExGCMHXllcAoXz4vMZH6b3LWMHXVCK8t_rdSyOv2BLQFyzYtwaVz0UqVgLlryCN9iyzlkam8OUmH2TyGWpPRCuOqs9PsylOQNHTL-1QmbnlfeHlHW2VvR-y0IKtJZ_cAKcD9JW9IrmrRqzam8Wi3YsRyjR1LF9v1f9rYYbkT9d2Wem2n-NmtyPagUc0BQtzkiCCgcwjMHvJ8QOeEjAMZwcVzZ1RqxwKGQyjcpSwREDy_JEiGX5FqsIZc9YxqvYaJPtzMXVlXyz7OCDXvxcBGT6TPWRocSzFKcOIBPLx0WW9C3sd9zdgtOL_UH51qe44-SSpuE0bxfjahaIncoR48ABHOu75ohTH8qJOxC6gWOfl0M3QjIvGTrObM-DWTP8us5Jcb_cJTE9HV3cOgl03Os5rWq4_ieMH7sxgt5UrExRujziPjaBvnIm5G3j8LiE9TOODcFdy-Ln7DQiwP5lM4_uSUf8mrUzqT9nt0vcaE5aLRLNwRKoOfOS3wfDxp2BnQOvND-CKlB-v8B9NMWrq1XsAGSNUXGBL9YeqqgZGhMvHs' );
define( 'HEADER_ACCEPT', 'application/json' );
define( 'HEADER_CONTENT_TYPE', 'application/json' );

// Birdsend sequence IDs
define( 'SEQUENCE_MOS_MEMBERS', 896 );
define( 'SEQUENCE_MOS_PARTNERS', 922 );

// Error messages
define( 'ERROR_MESSAGE_EMAIL_TAKEN', 'The Email has already been taken.' );

// Clickbank item IDs
define( 'CBID_NONE', 0 );
define( 'CBID_TEST', 1 );
define( 'CBID_LEGACY_PARTNER', 100 );
define( 'CBID_MONTHLY_PARTNER', 50 );
define( 'CBID_YEARLY_PARTNER', 55 );
define( 'CBID_AUTOBUMP', 51 );
define( 'CBID_OTO1', 52 );
define( 'CBID_OTO2', 53 );
define( 'CBID_OTO3', 54 );