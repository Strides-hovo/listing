export default defineComponent({
    props: {
      width: {
        type: String,
        default: "24px"
      } 
    },
    render: (props: any) => {
      return (
        <svg
        width = { props.width }
        height= { props.width }
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        {...props}
      >
        <path
          fillRule="evenodd"
          clipRule="evenodd"
          d="M5.46967 14.5303C5.17678 14.2374 5.17678 13.7626 5.46967 13.4697L11.4697 7.46967C11.7626 7.17678 12.2374 7.17678 12.5303 7.46967L18.5303 13.4697C18.8232 13.7626 18.8232 14.2374 18.5303 14.5303C18.2374 14.8232 17.7626 14.8232 17.4697 14.5303L12 9.06066L6.53033 14.5303C6.23744 14.8232 5.76256 14.8232 5.46967 14.5303Z"
          fill="#030D45"
        />
      </svg>
      )
    }
  })