import 'package:flutter/material.dart';
import 'package:flutter_mysql/home.dart';
import 'package:flutter_mysql/models/note.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Flutter + MySQl',
      theme: ThemeData(
        primaryColor:Colors.black,
        scaffoldBackgroundColor: Colors.blueGrey.shade900,
        appBarTheme: const AppBarTheme(
          backgroundColor: Colors.transparent,
          elevation: 0
        ) 
        ),
        initialRoute: '/',
        routes: {
          '/':(context) => const Home(),
        },
    );
  }
}