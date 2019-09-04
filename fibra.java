import java.util.Scanner;
class numeroFibra{
    static String[] corNome = {"Verde",
    "Amarelo",
    "Branco",
    "Azul",
    "Vermelho",
    "Violeta",
    "Marrom",
    "Rosa",
    "Preto",
    "Cinza",
    "Laranja",
    "Aqua Azul"};
    public static String nomeCor(int numero){
        for(int i=0;i<corNome.length;i++){
            if(numero<=12){
                return corNome[numero-1];
            }else if(numero>12 && numero<=24){
                return corNome[numero-13];
            }else if(numero>24 && numero<=36){
                return corNome[numero-25];
            }else if(numero>36 && numero<=48){
                return corNome[numero-37];
            }else if(numero>48 && numero<=60){
                return corNome[numero-49];
            }else if(numero>60 && numero<=72){
                return corNome[numero-61];
            }else{
                return "Só possuimos 72 fibras";
            }
        }
        return null;
    }
public static void main(String[]args){
    Scanner s=new Scanner(System.in);
    System.out.println("Digite o número da fibra");
    System.out.println(nomeCor(s.nextInt()));

}
}