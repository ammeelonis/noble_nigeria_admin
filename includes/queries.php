<?php

$query = "SELECT * FROM noble_articles WHERE status='regular' ORDER BY id DESC";
  $result = mysqli_query($conn, $query);
  $rows = $result->fetch_all(MYSQLI_ASSOC);
  $chunks = array_chunk($rows, 4);

  $header_datas = $chunks[0]; 
  $header_datas2 = $chunks[1];
  $latests1 = $chunks[2];
  $latests2 = $chunks[3];
  $latests3 = $chunks[4];
  $latests4 = $chunks[5];
  $latests5 = $chunks[6];
  //print_r($header_datas[0]);

  $featured_query = "SELECT * FROM noble_articles WHERE status='featured'";
  $featured_result = mysqli_query($conn, $featured_query);
  $featured_rows = $featured_result->fetch_all(MYSQLI_ASSOC);
  $featured_chunks = array_chunk($featured_rows, 6);
  $featured_chunk = $featured_chunks[0]; 

  $breaking_query = "SELECT * FROM noble_articles WHERE status='breaking'";
  $breaking_result = mysqli_query($conn, $breaking_query);
  $breaking_rows = $breaking_result->fetch_all(MYSQLI_ASSOC);
  $breaking_chunks = array_chunk($breaking_rows, 6);
  $breaking_chunk = $breaking_chunks[0];

  $trending_query = "SELECT * FROM noble_articles WHERE status='trending'";
  $trending_result = mysqli_query($conn, $trending_query);
  $trending_rows = $trending_result->fetch_all(MYSQLI_ASSOC);
  $trending_chunks = array_chunk($trending_rows, 6);
  $trending_chunk = $trending_chunks[0];

  ?>