package com.xianghang.concurrency;

/**
 * Created by litb on 14-3-10.
 */
public class HelloRunner implements Runnable {
    @Override
    public void run() {
        System.out.println("hello, idea is so simple");
    }

    public static void main(String[] args){
        new Thread(new HelloRunner()).start();
        new HelloThread().start();
    }
}

class HelloThread extends Thread{
    @Override
    public void run(){
        System.out.println("hello,thread");
    }
}
