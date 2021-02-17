#include <iostream>
using namespace std;

int main()
{
    cout << somme(1,1) << endl;
    return 0;
}

int somme (int x, int y) {
	return x+y;
}

int Fact(int x) {
	int b = 1;
	int i;
	for(i=x;i>0;i--) {
		b = b * i;
	}
	return b;
}

 bool Divise(int B,int A) {
	bool divise = false;
		if(B%A==0) {
            divise = true;
		}
		return divise;
}
 void QuotRest(int A, int B, int* Q, int* R) {
	*Q = 0;
	*R = A;
		while(*R>=B) {
			*R = *R%B;
			*Q++;
		}
}
 bool Voyelle(char c) {
	bool voyelle = false;

		switch (c) {
		case 'a':
			voyelle = true;
			break;
		case 'e':
			voyelle = true;
					break;
		case 'i':
			voyelle = true;
			break;
		case 'o':
			voyelle = true;
			break;
		case 'u':
			voyelle = true;
			break;
		case 'y':
			voyelle = true;
			break;
		default:
			break;
		}
		return voyelle;
	}
 void Permute(int* A, int* B) {
		int c; c= A;
		*A = *B;
		*B = c;
}
 int Vabs(int A) {
		int Vabs = A;
		if(A<0) Vabs = (-1) * A;
		return Vabs;
}
