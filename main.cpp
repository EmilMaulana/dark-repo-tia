#include <iostream>
using namespace std;
int luas(int s);
int keliling(int s);

int main() {
	int sisi, L, K;
	cout<<"Menghitung Luas dan Keliling Persegi"<<endl<<"............................"<<endl;
	cout<<"Input nilai sisi :";
	cin>>sisi;
	
	L = luas(sisi);
	K = keliling(sisi);
	cout<<"Nilai Luas :"<<L<<endl;
	cout<<"Nilai Keliling :"<<K<<endl;
	return 0;
}

int luas(int s){
	int luas;
	luas = s*s;
	return luas;
}

int keliling(int s){
	int keliling;
	keliling = 4*s;
	return keliling;
}
