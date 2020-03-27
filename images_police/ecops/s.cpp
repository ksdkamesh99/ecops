#include <iostream>
using namespace std;

int main() {
	// your code goes here
	int n,k;
	cin>>n;
	cin>>k;
	int a[n];
	for(int i=0;i<n;i++){
		cin>>a[i];
	}
	sort(a,a+n);
	int c;
	int start=a[0];
	int end=a[n-1];
	int mid;
	int ans;
	while(start<end){
		c=0;
		mid=(start+end)/2;
		for(int i=0;i<n;i++){
			if(a[i]>mid){
				c=c+a[i]-mid;
			}
		}
		if(c==k){
			ans=mid;
			break;
		}
		else if(c>k){
			start=mid+1;
			ans=mid;
		}
		else{
			end=mid-1;
		}
		
	}
	cout<<ans;
	return 0;
}